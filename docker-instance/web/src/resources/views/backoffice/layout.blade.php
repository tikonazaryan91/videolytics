<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/favicon.ico" rel="shortcut icon">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">

    <link rel="stylesheet" media="all" href="{{ asset('plugins/fontawesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset(mix('css/app.css')) }}">
    <link rel="stylesheet" media="all" href="{{ asset(mix('css/all.css')) }}">

    @yield('custom-css')
</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel">
<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
        <!--------------------
        START - Main Menu
        -------------------->
        @include('backoffice._includes.menu')
        <!--------------------
        END - Main Menu
        -------------------->

        <div class="content-w">

            <!--------------------
            START - Top Bar
            -------------------->
            <div class="top-bar color-scheme-light" style="height: 54px;">
                <!--------------------
                START - Top Menu Controls
                -------------------->
                <div class="top-menu-controls">

                    <!--------------------
                    START - User avatar and menu in secondary top menu
                    -------------------->
                    <div class="logged-user-w">
                        <div class="logged-user-i">
                            <button class="btn btn-light" data-href="{{ route('logout') }}" data-method="post" data-confirm="Are you sure to logout?">
                                <i class="os-icon os-icon-signs-11"></i><span class="ml-2">Logout</span>
                            </button>
                        </div>
                    </div>
                    <!--------------------
                    END - User avatar and menu in secondary top menu
                    -------------------->
                </div>
                <!--------------------
                END - Top Menu Controls
                -------------------->
            </div>
            <!--------------------
            END - Top Bar
            -------------------->

            <div class="content-i">
                <div class="content-box">
                    @yield('content')
                </div>

                @hasSection('sidebar')
                    <!--------------------
                    START - Sidebar
                    -------------------->
                    <div class="content-panel">
                        @yield('sidebar')
                    </div>
                    <!--------------------
                    END - Sidebar
                    -------------------->
                @endif

            </div>
        </div>
    </div>
</div>

<input type="hidden" id="assetsUrlForJS" value="{!! asset('') !!}">

<script src="{{ asset(mix('js/manifest.js')) }}"></script>
<script src="{{ asset(mix('js/vendor.js')) }}"></script>
<script src="{{ asset(mix('js/app.js')) }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

@yield('custom-js')

</body>
</html>