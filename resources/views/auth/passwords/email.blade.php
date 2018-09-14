<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--     <meta name="viewport" content="width=device-width, initial-scale=1">
 --}}    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Login</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/login/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/login/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/login/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/login/unix.css')}}" rel="stylesheet">
    <link href="{{asset('css/login/style.css')}}" rel="stylesheet">
    <link href="{{asset('particule-js/css/style.css')}}" rel="stylesheet">
</head>

<body>
    
<div id="particles-js">
    <header id="header" style="background:rgba(52, 59, 64, 0.9);">
    <div class="container">

      <div id="logo" class="pull-left">
   <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>  -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <!-- <nav id="nav-menu-container"> -->
      <nav >
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://rexafrica.com/#hero">Accueil</a></li>
          <li><a href="http://rexafrica.com/#about">Qui sommes nous ?</a></li>
          <li><a href="http://rexafrica.com/feedback">Feedback</a></li>
          <li><a href="http://rexafrica.com#contact">Contact</a></li>
          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
         </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 ">
                    <div class="login-content">
                        <div class="login-logo">
{{--                             <img src="assets/images/logo.png" alt="" />
 --}}                        </div>
                        <div class="login-form">
                            <h4>@lang('Rénitialiser mon mot de passe')</h4>

                            @if (session('confirmation-success'))
                                <div class="alert alert-success">
                                    {{ session('confirmation-success') }}
                                </div>
                            @endif
                            @if (session('confirmation-danger'))
                                <div class="alert alert-danger">
                                    {!! session('confirmation-danger') !!}
                                </div>
                            @endif


                                                <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Adresse Email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('Recevoir le lien par mail')
                                </button>
                            </div>
                        </div>
                    </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{ asset('particule-js/js/particles.js')}}"></script>
<script src="{{ asset('particule-js/js/app.js')}}"></script>

</html>