<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Admin</title>

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
    <link href="{{asset('css/back/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/back/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/back/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/back/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/lib/unix.css')}}" rel="stylesheet">
    <link href="{{asset('css/back/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                   
                    <li class="active"><a href=""></a></li>
                    <li class="active"><a href="{{route('mesFeeds')}}" >
                        <i class="ti-home"></i>
                        @lang('Dashboard')</a>
                        
                    </li>
                      <li class="active"><a href="{{route('users.index')}}" >
                        <i class="ti-user"></i>
                        @lang('Les utilisateurs')<span class="badge badge-primary">29</span>
                         </a>
                        
                    </li>
                    <li class="active"><a href="{{route('mesFeeds')}}" >
                        <i class="ti-pencil-alt"></i>
                        @lang('Les feedbacks')<span class="badge badge-primary">29</span>
                         </a>
                        
                    </li>
                    <li class="active"><a href="{{route('mesFeeds')}}" >
                        <i class="ti-themify-favicon"></i>
                        @lang('Mes Feedback')<span class="badge badge-primary">8</span>
                         </a>
                        
                    </li>

                   
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->