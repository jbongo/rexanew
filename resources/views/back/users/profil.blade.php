@extends('back.layout.app')

@section('content')

@if (session('ok'))
       
            <div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    
                    <strong> {{ session('ok') }}</strong>
            </div>
         @endif

<div class="row">          
          <div class="card alert">

            <div class="col-lg-10">
                    <a href="{{route('users.index')}}" class="btn btn-warning btn-flat btn-addon m-b-10 m-l-5"><i class="ti-arrow-left"></i>@lang('Liste des utilisateurs')</a>
                
            </div>     
                                                               
            <div class="card-body">
                <div class="user-profile m-t-15">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="user-photo m-b-30">
                                <img class="img-responsive" src="{{ asset('img/profil.png') }}" width="230px" height="180px" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="user-profile-name dib">
                                {{ $user->civilite }} {{ $user->nom }} {{ $user->prenom }}

                            </div>
                            
                            <div class="custom-tab user-profile-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">@lang('Infos utilisateur')</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="1">
                                        <div class="contact-information">
                                            <div class="phone-content">
                                                <span class="contact-title">@lang('Rôle'):</span>
                                                <span class="badge badge-success">
                                                    {{ $user->role }}
                                                </span>
                                            </div>
                                            <div class="website-content">
                                                <span class="contact-title">@lang('Email'):</span>
                                                <span class="contact-website">{{ $user->email }}</span>
                                            </div>
                                            <div class="skype-content">
                                                <span class="contact-title">@lang('Téléphone'):</span>
                                                <span class="contact-skype">
                                                    {{ $user->phone }}
                                                </span>
                                            </div>
                                            {{-- <div class="address-content">
                                                <span class="contact-title">@lang('Date de naissance'):</span>
                                                <span class="mail-address">
                                                    {{ $user->date_naissance}}
                                                </span>
                                            </div> --}}
                                            <div class="gender-content">
                                                <span class="contact-title">@lang('Secteur d\'activité'):</span>
                                                <span class="gender">{{ $user->secteur_activite }}</span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title">@lang('Poste'):</span>
                                                <span class="phone-number">
                                                    {{ $user->poste}}
                                                </span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title">@lang('Adresse'):</span>
                                                <span class="phone-number">
                                                    {{ $user->adresse}}
                                                </span>
                                            </div>
                                            <div class="birthday-content">
                                                <span class="contact-title">@lang('Code postal'):</span>
                                                <span class="birth-date">
                                                    {{ $user->code_postal }}
                                                </span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title">@lang('Ville'):</span>
                                                <span class="phone-number">
                                                    {{ $user->ville}}
                                                </span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title">@lang('Pays'):</span>
                                                <span class="phone-number">
                                                    {{ $user->pays}}
                                                </span>
                                            </div>
                                            <div class="email-content">
                                                <span class="contact-title">
                                                @lang('Date de creation'):</span>
                                                <span class="contact-email">
                                                    {{ $user->created_at->format('d-m-y')}}
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@section('js-content')
    <script>
    // $('#ajouter').click(function(e){

    //     e.preventDefault();
    //     form.submit();
    // });      
    </script>


@endsection
