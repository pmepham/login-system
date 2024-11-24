@extends('layout.main')

@section('css')
@endsection

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar pt-5">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="index.html" class="text-gray-500 text-hover-primary">
                                <i class="ki-solid ki-home fs-3 text-gray-500 me-n1"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-solid ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
                        <!--<li class="breadcrumb-item">
                            <i class="ki-solid ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700">Hello</li>-->
                    </ul>
                    <h1 cclass="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-1 lh-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            GGG
        </div>
    </div>
</div>
@endsection

@section('modals')
@endsection

@section('js')
<script>
</script>

@endsection