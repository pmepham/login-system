@extends('layout.auth')

<div class="w-lg-500px p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" data-kt-redirect-url="authentication/sign-in/new-password.html" id="kt_password_reset_form">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-gray-900 mb-3">Forgot Password ?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-4">Enter your email to reset your password.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off">
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bold me-4">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <a href="authentication/sign-in/basic.html" class="btn btn-lg btn-light-primary fw-bold">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
