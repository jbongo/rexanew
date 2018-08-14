<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rexafrica</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <link href="{{asset('index/img/favicon.png')}}" rel="icon">
  <link href="{{asset('index/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="{{asset('index/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('index/lib/font-awesome/css/font-awesome.min.cs')}}s" rel="stylesheet">
  <link href="{{asset('index/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('index/css/style2.css')}}" rel="stylesheet"> 




  <!-- Styles -->
    <link href="{{asset('css/back/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/back/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/back/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/unix.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/style.css')}}" rel="stylesheet">


  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">REXAFRICA</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Accueil</a></li>
          <li><a href="#about">Qui sommes nous ?</a></li>
          <li><a href="{{route('feedback')}}">Feedback</a></li>
          <li><a href="#contact">Contact</a></li>
          @guest
                  <li >
                      <a  href="{{ route('login') }}">{{ __('Connexion') }}</a>
                  </li>
                  <li >
                      <a  href="{{ route('register') }}">{{ __('Inscription') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->nom }} 
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" style="text-decoration: none; color: black;" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('déconnexion') }}
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

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
     
    </div>
  </section><!-- #hero -->

  <main id="main">


      <div class="album py-5 ">
        <div class="container">

      <div class="row">
            <div class="col-md-2">
              <img src="{{asset('img/profil.png')}}" width="150px">
              <hr>
              </br><small class="text-muted"><strong>Auteur :</strong>  {{$feedback->user->prenom}} {{$feedback->user->nom}} </small>
              </br><small class="text-muted"><strong>Date :</strong>  {{$feedback->created_at->format('d-m-y')}}</small>
              </br><small class="text-muted"><strong> Secteur d'activité :</strong> {{$feedback->secteur}}</small>

            </div>

            <div class="col-md-7">
            <h4> {{$feedback->titre}} </h4>
                  <p class="card-text"> {{$feedback->description}}</p>
            </div>
           
        </div>
        


  </main>



        <div class="col-md-9 sm-m-top-30 ">
             <hr> 
             <div id="disqus_thread" class="bg-light"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            
            var disqus_config = function () {
            this.page.url = detailFeed.php;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = 1; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://rexafrica-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        </div>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rexafrica</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
         <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('index/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('index/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('index/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('index/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('index/lib/wow/wow.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="{{asset('index/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('index/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('index/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('index/lib/superfish/superfish.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('index/js/main.js')}}"></script>

  

</body>
</html>
