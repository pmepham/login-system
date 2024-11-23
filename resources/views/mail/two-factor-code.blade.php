<html lang="en" data-bs-theme="light"><!--begin::Head-->

<head>
    <title>Saul Theme by KeenThemes</title>
    <meta charset="utf-8">
    <meta name="description" content="Saul HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme">
    <meta name="keywords"
        content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Saul Theme by KeenThemes">
    <meta property="og:url" content="https://keenthemes.com/products/saul-html-pro">
    <meta property="og:site_name" content="Saul HTML Pro by Keenthemes">
    <link rel="canonical" href="https://preview.keenthemes.com/saul-html-pro/authentication/general/verify-email.html">
    <link rel="shortcut icon" href="/saul-html-pro/assets/media/logos/favicon.ico">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"> <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->

    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Signup Verify Email -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
                <!--begin::Logo-->
                <a href="/saul-html-pro/index.html" class="pt-lg-20 mb-12">
                    <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}"
                        class="theme-light-show h-40px h-lg-50px">
                    <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}"
                        class="theme-dark-show h-40px h-lg-50px">
                </a>
                <!--end::Logo-->


                <!--begin::Logo-->
                <h1 class="fw-bold fs-2qx text-gray-800 mb-7">Login System</h1>
                <!--end::Logo-->

                <!--begin::Message-->
                <div class="fs-3 fw-semibold text-muted mb-10">
                    Please use the Two Factor Authentication Code below:
                    <h1 class="fw-bold fs-2qx text-gray-800 mb-7">{{ $token }}</h1>
                </div>
                <!--end::Message-->
            </div>
            <!--end::Content-->

            <!--begin::Illustration-->
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-350px"
                style="background-image: url(/saul-html-pro/assets/media/illustrations/sketchy-1/7.png)">
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Authentication - Signup Verify Email-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "/saul-html-pro/assets/";        </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/saul-html-pro/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/saul-html-pro/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--end::Javascript-->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body><!--end::Body-->

</html>