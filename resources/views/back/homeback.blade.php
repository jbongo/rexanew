@extends('back.layout.app')

@section('content')
<div class="row">
        	<div class="col-lg-6 col-md-6">
                 <div class="card alert">
                                <div class="card-header">
                                    <h4 class="m-b-30">@lang('Derniers feedbacks') </h4>
                                    
                                </div>
                                <div class="recent-comment">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="{{ asset('img/profil.png') }}" width="60px" height="40px" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Saiful Islam</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                            <div class="comment-action">
                                                <div class="badge badge-success">Activé</div>
                                                <span class="m-l-10">
                                                    <a href="#"><i class="ti-check color-success"></i></a>
                                                    <a href="#"><i class="ti-close color-danger"></i></a>
                                                    <a href="#"></a>
                                                </span>
                                            </div>
                                            <p class="comment-date">01-08-2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="{{ asset('img/profil.png') }}" width="60px" height="40px" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Ishrat Jahan</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                            <div class="comment-action">
                                                <div class="badge badge-warning">@lang('Désactivé')</div>
                                                <span class="m-l-10">
                                                    <a href="#"><i class="ti-check color-success"></i></a>
                                                    <a href="#"><i class="ti-close color-danger"></i></a>
                                                    
                                                </span>
                                            </div>
                                            <p class="comment-date">01-08-2018</p>
                                        </div>
                                    </div>
                                    
                                    <div class="media no-border">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object" src="{{ asset('img/profil.png') }}" width="60px" height="40px" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Mr.  Ajay</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                            <div class="comment-action">
                                                <div class="badge badge-success">@lang('Activé')</div>
                                                <span class="m-l-10">
                                                    <a href="#"><i class="ti-check color-success"></i></a>
                                                    <a href="#"><i class="ti-close color-danger"></i></a>
                                                    <a href="#"></a>
                                                </span>
                                            </div>
                                            <div class="comment-date">01-08-2018</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
			    <h4 class="card-title">Rapport des feedbacks</h4>
				<ul class="list-inline text-right">
                            <li>
                                <h5><i class="fa fa-circle m-r-5 text-success"></i>En attente de validation</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5 text-info"></i>En ligne</h5>
                            </li>
                            
                        </ul>

                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                </div>
</div>




@endsection


@section('js-content')
<script>
$(function () {


// LINE CHART
 // Morris donut chart
        
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [
        {
            label: "En ligne",
            value: 30
        }, {
            label: "En attente de validation",
            value: 20
        }],
        resize: true,
        colors:['#009efb', '#55ce63']
    });
 });  
</script>
@endsection
