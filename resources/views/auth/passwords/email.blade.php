<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_description')">
    <meta name="author" content="MTU Catalog">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{  asset('admin/images/mtu.transparent.png') }}" />
    @livewireStyles
</head>
<body>

    <main class="py-4">
        <div class="container-scroller">
            <div class="center">
                <h2>{{ __('Reset Password') }}</h2>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="txt_field">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span></span>
                        <label for="email">{{ __('Email Address') }}</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <button type="submit">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>

 <!-- Scripts -->
 <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

 @livewireScripts
</body>

<footer>
 @include('layouts.inc.frontend.footer')
</footer>

</html>


