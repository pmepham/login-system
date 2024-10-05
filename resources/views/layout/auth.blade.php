<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" class="">
<head>
    <base href="../../">
    <title>Saul Theme by KeenThemes</title>
    <meta charset="utf-8">
    <meta name="description" content="Saul HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme">
    <meta name="keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Saul Theme by KeenThemes">
    <meta property="og:url" content="https://keenthemes.com/products/saul-html-pro">
    <meta property="og:site_name" content="Saul HTML Pro by Keenthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="http://preview.keenthemes.comauthentication/sign-in/basic.html">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    @yield('css')
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<body id="kt_body" class="app-blank">
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <a href="index.html" class="py-2 py-lg-20">
                            <img alt="Logo" src="assets/media/logos/mail.svg" class="h-40px h-lg-50px">
                        </a>
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to Login System</h1>
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">Manage your projects in a simple clean environment
                            <br>no clutter more focus
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    @yield('content')
                </div>
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <div class="d-flex flex-center fw-semibold fs-6">
                        <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">About</a>
                        <a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2"
                            target="_blank">Support</a>
                        <a href="https://keenthemes.com/products/saul-html-pro"
                            class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script> var hostUrl = "assets/"; </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    @yield('js')
</body>
</html>
