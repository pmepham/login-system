@extends('layout.auth')

@section('css')

@endsection

@section('content')
<div class="w-lg-500px p-10 p-lg-15 mx-auto">
    <form class="form w-100" novalidate="novalidate" id="login-attempt" action="{{route('login.attempt')}}"
        method="POST">
        <div class="text-center mb-10">
            <h1 class="text-gray-900 mb-3">Sign In to Saul HTML Pro</h1>
            <div class="text-gray-500 fw-semibold fs-4">New Here?
                <a href="{{ route('register') }}" class="link-primary fw-bold">Create an Account</a>
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
        <div class="form-input mb-10">
            <label class="form-label fs-6 fw-bold text-gray-900">Email</label>
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off">
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-input mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bold text-gray-900 fs-6 mb-0">Password</label>
                <a href="authentication/sign-in/password-reset.html" class="link-primary fs-6 fw-bold">Forgot Password
                    ?</a>
            </div>
            <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                autocomplete="off">
            <div class="invalid-feedback"></div>
        </div>
        <div class="text-center">
            <button type="submit" id="login-submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Login</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>


            <!--
            <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">Continue with
                Google</a>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3">Continue with
                Facebook</a>
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-20px me-3">
                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
                    class="theme-dark-show h-20px me-3">Continue with Apple</a>
            -->

        </div>

    </form>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '#login-submit', function () {
            var submit = $(this)
            if (!submit.prop('disabled')) {
                submit.prop('disabled', true);
                submit.attr('data-kt-indicator', 'on');
                var form = $('#login-attempt');
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
                        console.log('error', response);
                        $('#error').hide();
                        $('#login-attempt').find('.is-invalid').removeClass('is-invalid');

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
                            $('#login-attempt').find('.is-invalid').removeClass('is-invalid');
                            $.each(errors, function (key, value) {
                                $('#login-attempt [name="' + key + '"]').addClass('is-invalid').closest('.form-input').find('.invalid-feedback').text(value[0]);
                            })
                        }

                    },
                    success: function (response) {
                        console.log(response);
                        $('#error').hide();
                        $('#login-attempt').find('.is-invalid').removeClass('is-invalid')
                        $('#login-attempt').find('.form-control').addClass('is-valid')
                        KTUtil.loadSwal('Logging In', 'Please wait...', 'success');
                        setTimeout(function () {
                            window.location.assign(response.redirect);
                        }, 1500);
                    },
                });
            }
        })
    })
</script>
@endsection