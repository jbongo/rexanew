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
                    <a href="{{route('users.index')}}" class="btn btn-warning btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>@lang('Liste des utilisateurs')</a>
            <div class="panel panel-primary m-t-15">
                        
                       
            </div>
        </div>
        
            <div class="card-body">
                   
                <div class="form-validation">
                <form class="form-valide" action="{{route('storeUser')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="civilite">@lang('Civilité') <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="js-select2 form-control" id="civilite" name="civilite" style="width: 100%;" required>

                                            <option value="M.">@lang('M.')</option>
                                           <option value="Mme.">@lang('Mme.')</option>
                                            <option value="Mlle.">@lang('Mlle.')</option>
                                            
                                        </select>
                                        @if ($errors->has('civilite'))
                                            <br>
                                            <div class="alert alert-warning ">
                                                <strong>{{$errors->first('civilite')}}</strong> 
                                            </div>
                                         @endif
                                        
                                    </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-country">@lang('Nom') <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" value="{{old('nom')}}" id="nom" name="nom" required>
                            @if ($errors->has('nom'))
                                <br>
                                <div class="alert alert-warning ">
                                    <strong>{{$errors->first('nom')}}</strong> 
                                </div>
                            @endif 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-country">@lang('Prenom') <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" value="{{old('prenom')}}" id="prenom" name="prenom" required>
                            @if ($errors->has('prenom'))
                                <br>
                                <div class="alert alert-warning ">
                                    <strong>{{$errors->first('prenom')}}</strong> 
                                </div>
                            @endif 
                            </div>
                        </div>
                        
                                        
                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-town">@lang('Email') <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" placeholder="" required>
                                @if ($errors->has('email'))
                                    <br>
                                    <div class="alert alert-warning ">
                                        <strong>{{$errors->first('email')}}</strong> 
                                    </div>
                                @endif 
                                </div>
                        </div>

                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-town">@lang('Mot de passe') <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" value="{{old('password')}}" id="password" name="password" placeholder="" required>
                                @if ($errors->has('password'))
                                    <br>
                                    <div class="alert alert-warning ">
                                        <strong>{{$errors->first('password')}}</strong> 
                                    </div>
                                @endif 
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                    </form>
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
