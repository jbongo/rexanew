<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rexafrica</title>

 
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
        {{-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> --}}
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav>
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
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
                    <div class="login-content">
                        <div class="login-logo">
{{--                             <img src="assets/images/logo.png" alt="" />
 --}}                        </div>
                        <div class="login-form">
                            <h4>@lang('Rénitialisation du mot de passe')</h4>

                    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            <string> {{ session('confirmation-success') }} </string>
                        </div>
                    @else
                    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Adresse Email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Mot de passe')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('Comfirmer')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   @lang('Rénitialiser')
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                            
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
