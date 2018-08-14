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
                    <a href="{{route('mesFeeds')}}" class="btn btn-warning btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>@lang('Liste des feedbacks')</a>
            <div class="panel panel-primary m-t-15">
                        
                       
            </div>
        </div>
        
            <div class="card-body">
                   
                <div class="form-validation">
                <form class="form-valide" action="{{route('adddFeed')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="secteur">@lang('Secteur d\'activité') <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="js-select2 form-control {{$errors->has('secteur') ? 'is-invalid' : ''}}" id="secteur" name="secteur" style="width: 100%;" data-placeholder="Choose one.." required>
                                            
                                            <option ></option>
                                            @admin
                                            <option value="Agriculture">@lang('Agriculture')</option>
                                            @endadmin
                                            <option value="Informatique">@lang('Informatique')</option>
                                            <option value="Finance">@lang('Finance')</option>
                                            
                                        </select>
                                        @if ($errors->has('secteur'))
                                            <br>
                                            <div class="alert alert-warning ">
                                                <strong>{{$errors->first('secteur')}}</strong> 
                                            </div>
                                         @endif
                                        
                                    </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-country">@lang('Pays concerné par le feedback') <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control {{ $errors->has('pays') ? ' is-invalid' : '' }}" value="{{old('pays')}}" id="pays" name="pays" placeholder="Entez une lettre et choisissez.." required>
                            @if ($errors->has('pays'))
                                <br>
                                <div class="alert alert-warning ">
                                    <strong>{{$errors->first('pays')}}</strong> 
                                </div>
                            @endif 
                            </div>
                        </div>

                        
                                        
                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-town">@lang('Titre') <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control {{ $errors->has('titre') ? ' is-invalid' : '' }}" value="{{old('titre')}}" id="titre" name="titre" placeholder="" required>
                                @if ($errors->has('titre'))
                                    <br>
                                    <div class="alert alert-warning ">
                                        <strong>{{$errors->first('titre')}}</strong> 
                                    </div>
                                @endif 
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="">@lang('Feedback') </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="feedback" name="feedback"  rows="5" placeholder="" >{{old('feedback') ? old('feedback') : ""}}</textarea>
                                <span class="help-block">
                                <small></small>
                                </span>
                            </div>
                            @if($errors->has('feedback'))
                                <br>
                                <br><br>
                                    <div class="alert alert-warning">
                                        <strong>{{$errors->first('feedback')}}</strong> 
                                    </div> 
                                <hr> 
                                @endif
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
