<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('adminBSB-master/images/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('adminBSB-master/images/favicon.png') }}">

    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('adminBSB-master/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('adminBSB-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    
    <!-- Animation Css -->
    <link href="{{ asset('adminBSB-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('adminBSB-master/css/style.css') }}" rel="stylesheet">
  </head>

  <body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Area</b></a>
            <small>{{ strtoupper( env('APP_DESCRIPTION', 'APP DESCRIPTION') ) }}</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="msg">Sign in to start your session</div>
                    @if (session('message'))
                        <div class="alert alert-{{ session('type') }}">
                        {!! session('message') !!}
                        </div>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line @error('email') error focused @enderror">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required autofocus>
                        </div>
                        @error('email')
                            <label class="error" for="email">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line @error('password') error focused @enderror">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <label class="error" for="password">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }} class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" id="btn-submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <!-- <a href="{{ route('register') }}">Register Now!</a> -->
                        </div>
                        @if (Route::has('password.request'))
                            <div class="col-xs-6 align-right">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('adminBSB-master/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('adminBSB-master/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('adminBSB-master/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <!-- <script src="{{ asset('adminBSB-master/plugins/jquery-validation/jquery.validate.js') }}"></script> -->

    <script type="text/javascript">
      $(function () {
        // $('#sign_in').validate({
        //     highlight: function (input) {
        //         console.log(input);
        //         $(input).parents('.form-line').addClass('error');
        //     },
        //     unhighlight: function (input) {
        //         $(input).parents('.form-line').removeClass('error');
        //     },
        //     errorPlacement: function (error, element) {
        //         $(element).parents('.input-group').append(error);
        //     }
        // });
        $('#sign_in').on('submit', function () { 
            $('#btn-submit').text('Loading...').prop('disabled', true);
        });
      });
    </script>
  </body>

</html>