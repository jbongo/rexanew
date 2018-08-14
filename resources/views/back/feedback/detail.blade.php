@extends('back.layout.app')

@section('content')

<div class="row"> 
       
        <div class="col-lg-12">
                @if (session('ok'))
       
                <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
                </div>
                @endif       
            <div class="card alert">
                <!-- table -->
            <a href="{{route('addFeed')}}" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i class="ti-user"></i>@lang('Ajouter un Feedback')</a>
                
                <div class="card-body">
                         <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="product-2-details">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <div class="product-2-des">
                                                        <div class="product_name">
                                                            <h4>{{$feedback->titre}}</h4>
                                                        </div>
                                                        <div class="">
                                                            <p>{{$feedback->description}}</p>
                                                        </div>
                                                    </div>
                                                    
                                                </td>

                                                <td>
                                                    <div class="product-2-button">
                                                        <div class="prdt_add_to_cart">
                                                            <a href="{{route('delFeed',$feedback->id)}}" data-toggle="tooltip" class="delete btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">@lang('Supprimer')</a >
                                                            <a href="{{route('editFeed',$feedback->id)}}" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">@lang('Modifier')</a >
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td></td>
                                                <td>@lang('Secteur'): {{$feedback->secteur}}</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                    <div class="product-2-des">                                                    
                                        <div class="product_des">
                                        <p>@lang('Secteur'): {{$feedback->secteur}} |
                                            @lang('Crée le '): {{$feedback->created_at->format('d-m-y')}}|
                                            @lang('Pays'): {{$feedback->pays}}
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </div>
                <!-- end table -->
            </div>
        </div>

    </div>

    
   
@endsection

@section('js-content')
<script>

        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })
            $('[data-toggle="tooltip"]').tooltip()
            $('a.delete').click(function(e) {
                let that = $(this)
                e.preventDefault()
                const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
})
        swalWithBootstrapButtons({
            title: '@lang('Vraiment supprimer ce feedback  ?')',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '@lang('Oui')',
            cancelButtonText: '@lang('Non')',
            
        }).then((result) => {
            if (result.value) {
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: '{{route('delFeed',$feedback->id)}}',
                        type: 'PUT',
                        success : function(data){
                            console.log('Ok :'+data);
                            window.location = "{{route('mesFeeds')}}"
                        },
                        error : function(data){
                            console.log('not Ok :'+data);
                            window.location = "{{route('mesFeeds')}}"
                        }
                    })
                    .done(function () {
                            window.location = "{{route('mesFeeds')}}"
                           
                    })
                swalWithBootstrapButtons(
                'Supprimé!',
                'Le feedback a bien été supprimé.',
                'success'
                )
                
                
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                'Annulé',
                'Le feedback n\'a pas été supprimé :)',
                'error'
                )
            }
        })
            })
        })
</script>
@endsection
