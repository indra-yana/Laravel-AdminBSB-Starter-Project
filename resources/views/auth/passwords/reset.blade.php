<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

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

  <body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Area</b></a>
            <small>{{ strtoupper( env('APP_DESCRIPTION', 'APP DESCRIPTION') ) }}</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="msg">
                        Please enter your new login information
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line @error('email') error focused @enderror">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autofocus autocomplete="email">
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
                            <input id="password" type="password" class="form-control" name="password" placeholder="New Password" required autocomplete="new-password">
                        </div>
                        @error('password')
                            <label class="error" for="password">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line @error('password') error focused @enderror">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
                        </div>
                        @error('password')
                            <label class="error" for="password">{{ $message }}</label>
                        @enderror
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">{{ __('Reset Password') }}</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        {{-- <a href="{{ route('login') }}">Login!</a> --}}
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
    <script src="{{ asset('adminBSB-master/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <script type="text/javascript">
      $('#forgot_password').validate({
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        }
      });
    </script>
  </body>

</html>