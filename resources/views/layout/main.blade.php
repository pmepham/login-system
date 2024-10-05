<html lang="en" data-bs-theme="light">
<head>
    <title>Saul Theme by KeenThemes</title>
    <meta charset="utf-8">
    <meta name="description" content="Saul HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme">
    <meta name="keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_UK">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Saul Theme by KeenThemes">
    <meta property="og:url" content="https://keenthemes.com/products/saul-html-pro">
    <meta property="og:site_name" content="Saul HTML Pro by Keenthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="http://preview.keenthemes.comindex.html">
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true"
    data-kt-app-aside-push-footer="true" class="app-default">
    <script>
        var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
                <div class="d-flex align-items-center flex-stack flex-grow-1">
                    <div class="app-header-logo d-flex align-items-center flex-stack px-lg-10 mb-2" id="kt_app_header_logo">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-solid ki-abstract-14 fs-2"> </i>
                        </div>
                        <a href="{{ route('dashboard') }}" class="app-sidebar-logo">
                        <h1
                        class="d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-1 lh-0 mb-0">
                        Base</h1>
                            <!--<img alt="Logo" src="assets/media/logos/default.svg" class="h-30px theme-light-show">
                            <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px theme-dark-show">-->
                        </a>
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-sm btn-icon btn-color-warning me-n2 d-none d-lg-flex"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <i class="ki-duotone ki-exit-left fs-2x rotate-180">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
                        <div class="app-navbar-item ms-3 ms-lg-4 me-lg-10" id="kt_header_user_menu_toggle">
                            <div class="cursor-pointer symbol symbol-30px symbol-lg-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <img src="{{ asset('assets/media/avatars/blank.png') }}" alt="user">
                            </div>
                            
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true" style="">
                                
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="{{ asset('assets/media/avatars/blank.png') }}">
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">Peter Mepham
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">mephampeter@hotmail.co.uk</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                <div class="separator my-2"></div>
                                
                                
                                <div class="menu-item px-5">
                                    <a href="" class="menu-link px-5">My Profile</a>
                                </div>
                                
                                
                                <div class="menu-item px-5">
                                    <a href="apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">My Projects</span>
                                        <span class="menu-badge">
                                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                        </span>
                                    </a>
                                </div>
                                
                                
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4" style="">
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/statements.html"
                                                class="menu-link d-flex flex-stack px-5">Statements
                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                    aria-label="View your statements"
                                                    data-bs-original-title="View your statements"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 fs-5">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span></a>
                                        </div>
                                        
                                        
                                        <div class="separator my-2"></div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications">
                                                    <span class="form-check-label text-muted fs-7">Notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="menu-item px-5">
                                    <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                                </div>
                                
                                
                                <div class="separator my-2"></div>
                                
                                
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">Mode
                                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                    <span class="path7"></span>
                                                    <span class="path8"></span>
                                                    <span class="path9"></span>
                                                    <span class="path10"></span>
                                                </i>
                                                <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span></span>
                                    </a>
                                    
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu" style="">
                                        
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                        <span class="path9"></span>
                                                        <span class="path10"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">Language
                                            <span
                                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                    src="{{ asset('assets/media/flags/united-states.svg') }}" alt=""></span></span>
                                    </a>
                                    
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4" style="">
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}"
                                                        alt="">
                                                </span>English</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}" alt="">
                                                </span>Spanish</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="">
                                                </span>German</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}" alt="">
                                                </span>Japanese</a>
                                        </div>
                                        
                                        
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}" alt="">
                                                </span>French</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="menu-item px-5 my-1">
                                    <a href="" class="menu-link px-5">System Settings</a>
                                </div>
                                
                                
                                <div class="menu-item px-5">
                                    <a href="{{ route('logout') }}" class="menu-link px-5">Logout</a>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="app-header-separator me-5"></div>
                
            </div>
            
            
            <div class="app-wrapper flex-column flex-row-fluid me-lg-5" id="kt_app_wrapper">
                
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    
                    <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 mx-5 d-flex flex-column"
                        id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
                        data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px" style="height: 446px;">
                        
                        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                            class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
                            

                            <div class="menu-item">
                                <a class="menu-link active" href="{{ route('dashboard') }}">
                                <span class="menu-icon"><i class="ki-solid ki-element-11 fs-1"></i></span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    
                    @yield('content')
                    
                    
                    <div id="kt_app_footer"
                        class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3">
                        
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024©</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        
                        
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://keenthemes.com/products/saul-html-pro" target="_blank"
                                    class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @yield('modals');
    
    <script>
        var hostUrl = "{{ asset('assets/') }}";
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    @yield('js')
    


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004"
            d="M-1 380.2628571428571L-1 380.2628571428571C-1 380.2628571428571 33.77557033962673 380.2628571428571 33.77557033962673 380.2628571428571C33.77557033962673 380.2628571428571 67.55114067925346 380.2628571428571 67.55114067925346 380.2628571428571C67.55114067925346 380.2628571428571 101.3267110188802 380.2628571428571 101.3267110188802 380.2628571428571C101.3267110188802 380.2628571428571 135.10228135850693 380.2628571428571 135.10228135850693 380.2628571428571C135.10228135850693 380.2628571428571 168.87785169813367 380.2628571428571 168.87785169813367 380.2628571428571C168.87785169813367 380.2628571428571 202.6534220377604 380.2628571428571 202.6534220377604 380.2628571428571C202.6534220377604 380.2628571428571 236.42899237738715 380.2628571428571 236.42899237738715 380.2628571428571C236.42899237738715 380.2628571428571 270.20456271701386 380.2628571428571 270.20456271701386 380.2628571428571C270.20456271701386 380.2628571428571 303.9801330566406 380.2628571428571 303.9801330566406 380.2628571428571C303.9801330566406 380.2628571428571 337.75570339626734 380.2628571428571 337.75570339626734 380.2628571428571C337.75570339626734 380.2628571428571 371.5312737358941 380.2628571428571 371.5312737358941 380.2628571428571C371.5312737358941 380.2628571428571 405.3068440755208 380.2628571428571 405.3068440755208 380.2628571428571C405.3068440755208 380.2628571428571 439.0824144151475 380.2628571428571 439.0824144151475 380.2628571428571C439.0824144151475 380.2628571428571 472.8579847547743 380.2628571428571 472.8579847547743 380.2628571428571C472.8579847547743 380.2628571428571 506.633555094401 380.2628571428571 506.633555094401 380.2628571428571C506.633555094401 380.2628571428571 540.4091254340277 380.2628571428571 540.4091254340277 380.2628571428571C540.4091254340277 380.2628571428571 574.1846957736545 380.2628571428571 574.1846957736545 380.2628571428571C574.1846957736545 380.2628571428571 607.9602661132812 380.2628571428571 607.9602661132812 380.2628571428571C607.9602661132812 380.2628571428571 607.9602661132812 380.2628571428571 607.9602661132812 380.2628571428571 ">
        </path>
    </svg>
</body>


</html>'