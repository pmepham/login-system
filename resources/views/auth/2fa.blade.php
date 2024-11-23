@extends('layout.auth')

@section('content')
<div class="w-lg-500px p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="2fa-attempt" action="{{route('2fa.attempt', $id)}}"
    method="POST">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-gray-900 mb-3">Login Authentication</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-4">Use the code we sent to your email adress to complete the login.
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="mb-10 form-input">
            <label class="form-label fw-bold text-gray-900 fs-6">Authentication Code</label>
            <input class="form-control form-control-solid" type="text" placeholder="" name="authentication_code" autocomplete="off">
            <div class="invalid-feedback"></div>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="2fa-submit" class="btn btn-lg btn-primary fw-bold me-4">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bold">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '#2fa-submit', function () {
            var submit = $(this)
            if (!submit.prop('disabled')) {
                submit.prop('disabled', true);
                submit.attr('data-kt-indicator', 'on');
                var form = $('#2fa-attempt');
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
                        $('#error').hide();
                        $('#2fa-attempt').find('.is-invalid').removeClass('is-invalid');

                        submit.prop('disabled', false);
                        submit.attr('data-kt-indicator', '');
                        var error = response.responseJSON.error;
                        if (error != undefined) {
                            $('#error .error-message').text(error);
                            $('#error').show();
                        }

                        var errors = response.responseJSON.errors;
                        if (errors != undefined) {
                            $('#error').hide();
                            $('#2fa-attempt').find('.is-invalid').removeClass('is-invalid');
                            $.each(errors, function (key, value) {
                                $('#2fa-attempt [name="' + key + '"]').addClass('is-invalid').closest('.form-input').find('.invalid-feedback').text(value[0]);
                            })
                        }

                    },
                    success: function (response) {
                        console.log(response);
                        $('#error').hide();
                        $('#2fa-attempt').find('.is-invalid').removeClass('is-invalid')
                        $('#2fa-attempt').find('.form-control').addClass('is-valid')
                        KTUtil.loadSwal('Authenticating', 'Please wait...', 'success');
                        console.log(response);
                        setTimeout(function () {
                            window.location.assign(response.redirect);
                        }, 1500);
                    },
                });
            }
        })
    });   
</script>
@endsection