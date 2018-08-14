<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rexafrica</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <link href="{{asset('index/img/favicon.png')}}" rel="icon">
  <link href="{{asset('index/img/apple-touch-icon.png')}}" rel="apple-touch-icon"/>

  <link href="{{asset('index/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet"/>

  <!-- Libraries CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  {{-- <link href="{{asset('index/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/> --}}
  <link href="{{asset('index/lib/animate/animate.min.css')}}" rel="stylesheet"/>
  {{-- <link href="{{asset('index/lib/animate/animate.min.css')}}" rel="stylesheet"/> --}}

  <!-- Main Stylesheet File -->
  <link href="{{asset('index/css/style.css')}}" rel="stylesheet"/> 
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
        <a href="#hero"><img src="{{ asset('img/logo.png') }}" width="165px" height="90px" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        {{-- <h1><a href="#hero">REXAFRICA</a></h1> --}}
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
                          {{ Auth::user()->nom }} <span class="caret"></span>
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
      <h1>Bienvenue sur Rexafrica</h1>
      <h2>Venez partagez votre retour d'expérience</h2>
      <a href="pages/feedback.php" class="btn-get-started">Voir tous les retours d'expérience</a>
    </div>
  </section><!-- #hero -->

   <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
     
        <div class="row ">

          <section id="services">
            <div class="container wow fadeIn">
             
              <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box">
                    <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                    <h4 class="title"><a href="">Partagez votre expérience</a></h4>
                    <p class="description">Là où il y’a des experts, il ne manque jamais d’apprenants.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                  <div class="box">
                    <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                    <h4 class="title"><a href="">Planifiez votre avenir </a></h4>
                    <p class="description">Quelque soit ton âge ton avenir sera toujours envisageable.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="box">
                    <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
                    <h4 class="title"><a href="">Soyez  proactif</a></h4>
                    <p class="description">Le rugissement d’un lion ne suffit pas à tuer sa proie.</p>
                  </div>
                </div>
              </div>

            </div>
          </section>


        </div>

      </div>
    </section><!-- #facts -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">QUI SOMMES NOUS ?</h2>
            <p>
              RexAfrica est un projet qui vise à inspirer, sensibiliser , motiver les africains à travers des retours d’expérience customisés et success stories.
            </p>
            <p>
              Cette plateforme met en relation les africains de la diaspora à leurs pairs locaux et est un canal de partage de facteurs clés de succès (professionnel, social)
            </p>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Notre objectif</h3>
          <p class="section-description">Le principal objectif de ce concept est de ramener les africains de l’extérieur à leurs origines en leur montrant comment ont réussis leurs pairs en Afrique et diversifiant le capital humain de l’Afrique .
          </p>
        </div>

      </div>

      </div>
    </section><!-- #facts -->

    
    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">         
          <div class="col-md-6 offset-md-3">
             <h3 class="cta-title">Pour partager votre feedback,</h3>
          </div>
        </div>

        <div class="col-md-6 offset-md-3">
            <a class="cta-btn align-middle" href="rexadmin/login.php">Inscrivez vous dès maintenant</a>
        </div>
      </div>
    </section><!-- #call-to-action -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>


      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>contact@rexafrica.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+33 09 999 555 55</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <!-- <div id="errormessage"></div> -->
              <form action="#" method="post" role="form" id="contactForm" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Entrez une adresse valide svp" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Envoyer </button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

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

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('index/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('index/js/main.js')}}"></script>

  <script type="text/javascript">
    $('#contactform').submit(function(e){

      e.preventDefault();

    });

  </script>

</body>
</html>
