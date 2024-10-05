@extends('layout.auth')

@section('css')

@endsection

@section('content')
<div class="w-lg-600px p-10 p-lg-15 mx-auto">
    <form class="form w-100" novalidate="novalidate" id="register-attempt" action="{{ route('register.attempt') }}"
        method="POST">
        @csrf
        <div class="mb-10 text-center">
            <h1 class="text-gray-900 mb-3">Create an Account</h1>
            <div class="text-gray-500 fw-semibold fs-4">Already have an account?
                <a href="{{ route('login') }}" class="link-primary fw-bold">Sign in here</a>
            </div>
        </div>
        <div id="error" style="display:none;">
            <div class="alert alert-dismissible bg-light-danger d-flex flex-column align-items-center flex-sm-row w-100 p-5 mb-10">
                <i class="ki-solid ki-information-3 fs-2hx text-danger me-4 mb-5 mb-sm-0"></i>
                <div class="d-flex flex-column pe-0">
                    <h4 class="fw-semibold mb-0 error-message"></h4>
                </div>
            </div>
        </div>
        <div class="row mb-7">
            <div class="form-input col-xl-6">
                <label class="form-label fw-bold text-gray-900 fs-6">First Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                    name="firstname" autocomplete="off">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-input col-xl-6">
                <label class="form-label fw-bold text-gray-900 fs-6">Last Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                    name="lastname" autocomplete="off">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="form-input mb-7">
            <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email"
                autocomplete="off">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-10" data-kt-password-meter="true">
            <div class="mb-1">
                <div class="d-flex align-items-center justify-content-between">
                    <label class="form-label fw-bold text-gray-900 fs-6">Password</label>
                    <span class="btn btn-sm btn-icon" data-kt-password-meter-control="visibility">
                        <i class="ki-solid ki-eye-slash fs-2"></i>
                        <i class="ki-solid ki-eye fs-2 d-none"></i>
                    </span>
                </div>
                <div class="form-input mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password" autocomplete="off">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>
            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
        </div>
        <div class="form-input mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="tac" value="1">
                <span class="form-check-label fw-semibold text-gray-700 fs-6">I Agree
                    <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
            </label>
            <div class="invalid-feedback"></div>
        </div>
        <div class="text-center">
            <button type="button" id="register-submit" class="btn btn-lg w-100 btn-primary">
                <span class="indicator-label">Register</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '#register-submit', function () {
            var submit = $(this)
            if (!submit.prop('disabled')) {
                submit.prop('disabled', true);
                submit.attr('data-kt-indicator', 'on');
                var form = $('#register-attempt');
                var formData = form.serialize();
                //validate the form
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Include CSRF token
                    },
                    error: function (response) {
                        console.log(response)
                        submit.prop('disabled', false);
                        submit.attr('data-kt-indicator', '');

                        $('#error').hide();
                        $('#register-attempt').find('.is-invalid').removeClass('is-invalid');

                        var error = response.responseJSON.error;
                        if (error != undefined) {
                            $('#error .error-message').text(error);
                            $('#error').show();
                        }

                        var errors = response.responseJSON.errors;
                        if (errors != undefined) {
                            $.each(errors, function (key, value) {
                                $('#register-attempt [name="' + key + '"]').addClass('is-invalid').closest('.form-input').find('.invalid-feedback').text(value[0]);
                            })
                        }
                    },
                    success: function (response) {
                        $('#error').hide();
                        $('#register-attempt').find('.is-invalid').removeClass('is-invalid')
                        $('#register-attempt').find('.form-control').addClass('is-valid')
                        KTUtil.loadSwal('Logging In', 'Please wait...', 'success');
                        setTimeout(function () {
                            window.location.assign('{{route('dashboard')}}');
                        }, 1500);
                    },
                })
            }
        })
    })
</script>
@endsection