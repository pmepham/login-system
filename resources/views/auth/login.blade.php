@extends('layout.auth')

@section('css')

@endsection

@section('content')
<div class="w-lg-500px p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="" method="POST">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-gray-900 mb-3">Sign In to Saul HTML Pro</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-4">New Here?
                <a href="" class="link-primary fw-bold">Create an Account</a>
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <label class="form-label fs-6 fw-bold text-gray-900">Email</label>
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off">
            <div class="invalid-feedback"></div>
        </div>
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bold text-gray-900 fs-6 mb-0">Password</label>
                <a href="authentication/sign-in/password-reset.html" class="link-primary fs-6 fw-bold">Forgot Password
                    ?</a>
            </div>
            <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                autocomplete="off">
            <!--end::Input-->
            <div class="invalid-feedback"></div>
        </div>
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Login</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->
            <!--begin::Separator-->
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
            <!--end::Google link-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '#kt_sign_in_submit', function () {
            var submit = $(this)
            if (!submit.prop('disabled')) {
                submit.prop('disabled', true);
                submit.attr('data-kt-indicator', 'on');
                var form = $('#kt_sign_in_form');
                var csrf = $('#kt_sign_in_form [name="_token"]').val();
                var email = $('#kt_sign_in_form [name="email"]').val();
                var password = $('#kt_sign_in_form [name="password"]').val();
                //validate the form
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: { _token: csrf, email: email, password: password },
                    error: function (response, status, error) {
                        submit.prop('disabled', false);
                        submit.attr('data-kt-indicator', '');
                        var errors = response.responseJSON;

                        $('#kt_sign_in_form').find('.is-invalid').removeClass('is-invalid');
                        $.each(errors, function (key, value) {
                            $('#kt_sign_in_form [name="' + key + '"]').addClass('is-invalid').parent().find('.invalid-feedback').text(value[0]);
                        })
                    },
                    success: function (response) {
                        $('#kt_sign_in_form').find('.is-invalid').removeClass('is-invalid')
                        $('#kt_sign_in_form').find('.form-control').addClass('is-valid')
                        Swal.fire({
                            icon: "success",
                            title: "Login successful!",
                            text: "Please wait...",
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            timer: 1500
                        }).then(function () {
                            //console.log(response)
                            location.href = response.redirect;
                        });
                    },
                })
            }
        })
    })
</script>
@endsection