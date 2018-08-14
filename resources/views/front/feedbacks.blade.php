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

      <section class="jumbotron text-center">
        <div class="container">
          <h3 class="jumbotron-heading">Vous aussi partagez votre retour d'expérience</h3>
          <p class="lead text-muted"></p>
          <p>
            <a href="../rexadmin/login.php" class="btn btn-secondary">Ajouter votre feeback</a>
          </p>
          <hr>
          <p>
            <span >Trier par</a>
          </p>
          <p>
      
      <form action="#" method="get">


        <div class="form-row">
          <div class="form-group col-md-4">
           <label for="selectActivity">Secteur d'activité</label>
              <select class="form-control" name="sector" id="selectActivity">
              <option value="all"></option>
              <option value="all">Tous les secteurs</option>
              <option value="finance">Finance</option>
              <option value="economie">Economie</option>
              <option value="informatique">Informatique</option>
            </select>
          </div>
         
    <div class="form-group col-md-4">
     <label for="selectCountry">Pays</label>
        <select class="form-control" name="country" id="selectPays">
          <option value="all"></option>
          <option value="all">Tous les Pays </option>
          <option value="Afghanistan">Afghanistan </option>
      <option value="Afrique_Centrale">Afrique Centrale </option>
      <option value="Afrique_du_Sud">Afrique du Sud </option>
      <option value="Albanie">Albanie </option>
      <option value="Algerie">Algérie </option>
      <option value="Allemagne">Allemagne </option>
      <option value="Andorre">Andorre </option>
      <option value="Angola">Angola </option>
      <option value="Anguilla">Anguilla </option>
      <option value="Arabie_Saoudite">Arabie Saoudite </option>
      <option value="Argentine">Argentine </option>
      <option value="Armenie">Armenie </option>
      <option value="Australie">Australie </option>
      <option value="Autriche">Autriche </option>
      <option value="Azerbaidjan">Azerbaidjan </option>

      <option value="Bahamas">Bahamas </option>
      <option value="Bangladesh">Bangladesh </option>
      <option value="Barbade">Barbade </option>
      <option value="Bahrein">Bahrein </option>
      <option value="Belgique">Belgique </option>
      <option value="Belize">Belize </option>
      <option value="Benin">Bénin </option>
      <option value="Bermudes">Bermudes </option>
      <option value="Bielorussie">Bielorussie </option>
      <option value="Bolivie">Bolivie </option>
      <option value="Botswana">Botswana </option>
      <option value="Bhoutan">Bhoutan </option>
      <option value="Boznie_Herzegovine">Boznie Herzégovine </option>
      <option value="Bresil">Brésil </option>
      <option value="Brunei">Brunei </option>
      <option value="Bulgarie">Bulgarie </option>
      <option value="Burkina_Faso">Burkina Faso </option>
      <option value="Burundi">Burundi </option>

      <option value="Caiman">Caiman </option>
      <option value="Cambodge">Cambodge </option>
      <option value="Cameroun">Cameroun </option>
      <option value="Canada">Canada </option>
      <option value="Canaries">Canaries </option>
      <option value="Cap_vert">Cap Vert </option>
      <option value="Chili">Chili </option>
      <option value="Chine">Chine </option>
      <option value="Chypre">Chypre </option>
      <option value="Colombie">Colombie </option>
      <option value="Comores">Colombie </option>
      <option value="Congo">Congo </option>
      <option value="Congo_democratique">Congo Démocratique </option>
      <option value="Cook">Cook </option>
      <option value="Coree_du_Nord">Corée du Nord </option>
      <option value="Coree_du_Sud">Corée du Sud </option>
      <option value="Costa_Rica">Costa Rica </option>
      <option value="Cote_d_Ivoire">Côte d’Ivoire </option>
      <option value="Croatie">Croatie </option>
      <option value="Cuba">Cuba </option>

      <option value="Danemark">Danemark </option>
      <option value="Djibouti">Djibouti </option>
      <option value="Dominique">Dominique </option>

      <option value="Egypte">Egypte </option>
      <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
      <option value="Equateur">Equateur </option>
      <option value="Erythree">Erythrée </option>
      <option value="Espagne">Espagne </option>
      <option value="Estonie">Estonie </option>
      <option value="Etats_Unis">Etats-Unis </option>
      <option value="Ethiopie">Ethiopie </option>

      <option value="Falkland">Falkland </option>
      <option value="Feroe">Feroe </option>
      <option value="Fidji">Fidji </option>
      <option value="Finlande">Finlande </option>
      <option value="France">France </option>

      <option value="Gabon">Gabon </option>
      <option value="Gambie">Gambie </option>
      <option value="Georgie">Géorgie </option>
      <option value="Ghana">Ghana </option>
      <option value="Gibraltar">Gibraltar </option>
      <option value="Grece">Grece </option>
      <option value="Grenade">Grenade </option>
      <option value="Groenland">Groënland </option>
      <option value="Guadeloupe">Guadeloupe </option>
      <option value="Guam">Guam </option>
      <option value="Guatemala">Guatémala</option>
      <option value="Guernesey">Guernesey </option>
      <option value="Guinee">Guinée </option>
      <option value="Guinee_Bissau">Guinée Bissau </option>
      <option value="Guinee equatoriale">Guinée Equatoriale </option>
      <option value="Guyana">Guyana </option>
      <option value="Guyane_Francaise ">Guyane Francaise </option>

      <option value="Haiti">Haiti </option>
      <option value="Hawaii">Hawaii </option>
      <option value="Honduras">Honduras </option>
      <option value="Hong_Kong">Hong Kong </option>
      <option value="Hongrie">Hongrie </option>

      <option value="Inde">Inde </option>
      <option value="Indonesie">Indonésie </option>
      <option value="Iran">Iran </option>
      <option value="Iraq">Iraq </option>
      <option value="Irlande">Irlande </option>
      <option value="Islande">Islande </option>
      <option value="Israel">Israel </option>
      <option value="Italie">italie </option>

      <option value="Jamaique">Jamaïque </option>
      <option value="Jan Mayen">Jan Mayen </option>
      <option value="Japon">Japon </option>
      <option value="Jersey">Jersey </option>
      <option value="Jordanie">Jordanie </option>

      <option value="Kazakhstan">Kazakhstan </option>
      <option value="Kenya">Kenya </option>
      <option value="Kirghizstan">Kirghizistan </option>
      <option value="Kiribati">Kiribati </option>
      <option value="Koweit">Koweït </option>

      <option value="Laos">Laos </option>
      <option value="Lesotho">Lesotho </option>
      <option value="Lettonie">Lettonie </option>
      <option value="Liban">Liban </option>
      <option value="Liberia">Liberia </option>
      <option value="Liechtenstein">Liechtenstein </option>
      <option value="Lituanie">Lituanie </option>
      <option value="Luxembourg">Luxembourg </option>
      <option value="Lybie">Lybie </option>

      <option value="Macao">Macao </option>
      <option value="Macedoine">Macédoine </option>
      <option value="Madagascar">Madagascar </option>
      <option value="Madère">Madère </option>
      <option value="Malaisie">Malaisie </option>
      <option value="Malawi">Malawi </option>
      <option value="Maldives">Maldives </option>
      <option value="Mali">Mali </option>
      <option value="Malte">Malte </option>
      <option value="Man">Man </option>
      <option value="Mariannes du Nord">Mariannes du Nord </option>
      <option value="Maroc">Maroc </option>
      <option value="Marshall">Marshall </option>
      <option value="Martinique">Martinique </option>
      <option value="Maurice">Maurice </option>
      <option value="Mauritanie">Mauritanie </option>
      <option value="Mayotte">Mayotte </option>
      <option value="Mexique">Mexique </option>
      <option value="Micronesie">Micronesie </option>
      <option value="Midway">Midway </option>
      <option value="Moldavie">Moldavie </option>
      <option value="Monaco">Monaco </option>
      <option value="Mongolie">Mongolie </option>
      <option value="Montserrat">Montserrat </option>
      <option value="Mozambique">Mozambique </option>

      <option value="Namibie">Namibie </option>
      <option value="Nauru">Nauru </option>
      <option value="Nepal">Nepal </option>
      <option value="Nicaragua">Nicaragua </option>
      <option value="Niger">Niger </option>
      <option value="Nigeria">Nigéria </option>
      <option value="Niue">Niue </option>
      <option value="Norfolk">Norfolk </option>
      <option value="Norvege">Norvège </option>
      <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
      <option value="Nouvelle_Zelande">Nouvelle Zélande </option>

      <option value="Oman">Oman </option>
      <option value="Ouganda">Ouganda </option>
      <option value="Ouzbekistan">Ouzbékistan </option>

      <option value="Pakistan">Pakistan </option>
      <option value="Palau">Palau </option>
      <option value="Palestine">Palestine </option>
      <option value="Panama">Panama </option>
      <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>
      <option value="Paraguay">Paraguay </option>
      <option value="Pays_Bas">Pays Bas </option>
      <option value="Perou">Perou </option>
      <option value="Philippines">Philippines </option>
      <option value="Pologne">Pologne </option>
      <option value="Polynesie">Polynesie </option>
      <option value="Porto_Rico">Porto Rico </option>
      <option value="Portugal">Portugal </option>

      <option value="Qatar">Qatar </option>

      <option value="Republique_Dominicaine">Republique Dominicaine </option>
      <option value="Republique_Tcheque">Republique Tcheque </option>
      <option value="Reunion">Reunion </option>
      <option value="Roumanie">Roumanie </option>
      <option value="Royaume_Uni">Royaume Uni </option>
      <option value="Russie">Russie </option>
      <option value="Rwanda">Rwanda </option>

      <option value="Sahara Occidental">Sahara Occidental </option>
      <option value="Sainte_Lucie">Sainte-Lucie </option>
      <option value="Saint_Marin">Saint-Marin </option>
      <option value="Salomon">Salomon </option>
      <option value="Salvador">Salvador </option>
      <option value="Samoa_Occidentales">Samoa Occidentales</option>
      <option value="Samoa_Americaine">Samoa Americaine </option>
      <option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
      <option value="Senegal">Sénégal </option>
      <option value="Seychelles">Seychelles </option>
      <option value="Sierra Leone">Sierra Leone </option>
      <option value="Singapour">Singapour </option>
      <option value="Slovaquie">Slovaquie </option>
      <option value="Slovenie">Slovénie</option>
      <option value="Somalie">Somalie </option>
      <option value="Soudan">Soudan </option>
      <option value="Sri_Lanka">Sri Lanka </option>
      <option value="Suede">Suede </option>
      <option value="Suisse">Suisse </option>
      <option value="Surinam">Surinam </option>
      <option value="Swaziland">Swaziland </option>
      <option value="Syrie">Syrie </option>

      <option value="Tadjikistan">Tadjikistan </option>
      <option value="Taiwan">Taiwan </option>
      <option value="Tonga">Tonga </option>
      <option value="Tanzanie">Tanzanie </option>
      <option value="Tchad">Tchad </option>
      <option value="Thailande">Thailande </option>
      <option value="Tibet">Tibet </option>
      <option value="Timor_Oriental">Timor Oriental </option>
      <option value="Togo">Togo </option>
      <option value="Trinite_et_Tobago">Trinite et Tobago </option>
      <option value="Tristan da cunha">Tristan de cuncha </option>
      <option value="Tunisie">Tunisie </option>
      <option value="Turkmenistan">Turmenistan </option>
      <option value="Turquie">Turquie </option>

      <option value="Ukraine">Ukraine </option>
      <option value="Uruguay">Uruguay </option>

      <option value="Vanuatu">Vanuatu </option>
      <option value="Vatican">Vatican </option>
      <option value="Venezuela">Vénézuela </option>
      <option value="Vierges_Americaines">Vierges Américaines </option>
      <option value="Vierges_Britanniques">Vierges Britanniques </option>
      <option value="Vietnam">Vietnam </option>

      <option value="Wake">Wake </option>
      <option value="Wallis et Futuma">Wallis et Futuma </option>

      <option value="Yemen">Yemen </option>
      <option value="Yougoslavie">Yougoslavie </option>

      <option value="Zambie">Zambie </option>
      <option value="Zimbabwe">Zimbabwe </option>

        </select>
</div>



          <div class="form-group col-md-4">
            <label for="inputKey">Mot clé</label>
            <input type="text" name="keyword" class="form-control" id="inputKey">
          </div>
          
        </div>
      
            <button href="#" class="btn btn-secondary">Rechercher</button>
          </p>
          </form>
        </div>
      </section>

   <!--==========================
       Section
    ============================-->
    
    <section id="factsss">
      <div class="container wow fadeIn">
     
        <div class="row ">

          @foreach($feedbacks as $feedback)

              <div class="col-lg-4">
                        <div class="card alert" style="height: 450px">
                            <div class="products_1 text-center" >
                                <div class="pr_img_price" >
                                    <div class="product_img">
                                        <img src="{{asset('img/profil.png')}}" width="95px" height="85px" alt="" />
                                    </div>
                                   
                                </div>

                                <div class="product_details">
                                    <div class="product_name">
                                        <h4>{{$feedback->titre}}</h4>
                                    </div>
                                    <div class="product_des">
                                        <p>{{$feedback->description}}</p>
                                    </div>
                                    <div class="prdt_add_to_cart">
                                        <a href="{{ route('showfrontFeed',$feedback->id) }}" class="btn btn-primary btn-rounded  m-l-5">@lang('Lire la suite')</a>

                                        <p>
                                        <small class="text-muted">@lang('Ajouté le') {{$feedback->created_at->format('d-m-y')}} @lang('par')
                                        </small>
                                   
                                       <h5>{{$feedback->user->prenom}} {{$feedback->user->nom}}
                                       </h5>
                                    </p>
                                    </div>
                                   
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                        <!-- /# card -->
                </div>
              @endforeach
        </div>

      </div>
    </section><!-- #facts -->

  <main id="main">



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
