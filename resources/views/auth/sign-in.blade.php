<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('backend/img/icons/icon-48x48.png') }}" />

    <link rel="canonical" href="https://demo.adminkit.io/pages-sign-in.html" />

    <title>Sign In | AdminKit Demo</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <link href="{{ asset('backend/css/light.css') }}" rel="stylesheet">
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    {{-- <link class="{{ asset('backend/js-stylesheet') }}" href="{{ asset('backend/css/light.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/js/settings.js') }}"></script> --}}
    <style>
       /* body {
            opacity: 0;
        }*/

    </style>
    <!-- END SETTINGS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120946860-10', {
            'anonymize_ip': true
        });
    </script>
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back, Charles</h1>
                            <p class="lead">
                                Sign in to your account to continue
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="{{ asset('backend/img/avatars/avatar.jpg') }}" alt="Charles Hall"
                                            class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
                                    <form action="{{ route('auth.check') }}" method="post">

                                        @if (Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif

                                        @if (Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif




                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                value="{{ old('email') }}" placeholder="Enter your email" />
                                            <span
                                                class="text-danger">@error('email'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg" type="password" name="password"
                                                    placeholder="Enter your password" />
                                                <span
                                                    class="text-danger">@error('password'){{ $message }}@enderror</span>
                                                    {{-- <small>
												<a href="pages-reset-password.html">Forgot password?</a>
											</small> --}}
                                                </div>
                                                {{-- <div>
                                            <label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span>
											</label>
                                        </div> --}}
                                                <div class="text-center mt-3">
                                                    <button type="submit" name="submit" class="btn btn-lg btn-primary">Sign
                                                        in</button>
                                                    <!--<a href="{{ route('auth.register') }}" class="btn btn-lg btn-success">Sign-->
                                                    <!--    up</a>-->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <script src="{{ asset('backend/js/app.js') }}"></script>

            <script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    setTimeout(function() {
                        if (localStorage.getItem('popState') !== 'shown') {
                            window.notyf.open({
                                type: "success",
                                message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                                duration: 10000,
                                ripple: true,
                                dismissible: false,
                                position: {
                                    x: "left",
                                    y: "bottom"
                                }
                            });

                            localStorage.setItem('popState', 'shown');
                        }
                    }, 15000);
                });
            </script>
        </body>

        </html>
