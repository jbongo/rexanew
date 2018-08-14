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
        {{-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> --}}
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://rexafrica.com/#hero">Accueil</a></li>
          <li><a href="http://rexafrica.com/#about">Qui sommes nous ?</a></li>
          <li><a href="http://rexafrica.com/pages/feedback.php">Feedback</a></li>
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
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
{{--                             <img src="assets/images/logo.png" alt="" />
 --}}                        </div>
                        <div class="login-form">
                            <h4>@lang('Connectez-vous')</h4>

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


                            <form method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" >@lang('Adresse Email')</label>

                                    <div >
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" >@lang('Mot de passe')</label>

                                    <div >
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Se souvenir de moi
                                    </label>

                                    <label class="pull-right">
                                        <a href="#">Mot de passe oublié ?</a>
                                    </label>

                                </div>


                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Se connecter</button>
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
