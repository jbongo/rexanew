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
                        <div class="table-responsive" style="overflow-x: inherit !important;">
                            <table  id="example" class=" table student-data-table  m-t-20 "  style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('Titre du feedback')</th>                                        
                                        <th>@lang('Description du feedback ')</th>
                                        <th>@lang('Pays concerné  ')</th>
                                        <th>@lang('Statut')</th>
                                        <th>@lang('Date de mise en ligne')</th>
                                        <th>@lang('Action') <span style="color: white;">xxxxxxxxx</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>
                                        {{$feedback->titre}}
                                        </td>
                                        <td>
                                        {{$feedback->description}} 
                                        </td>
                                        <td>
                                        {{$feedback->pays}} 
                                        </td>
                                        <td>
                                            @if($feedback->statut == 0)
                                                @php($color = "danger")
                                                @php($stat = "désactivé")
                                            @elseif($feedback->statut == 1)
                                                @php($color = "success")
                                                @php($stat = "activé")
                                            @endif
                                        <span class="badge badge-{{$color}}">{{$stat}}</span>
                                        
                                        </td>
                                        <td>
                                        {{$feedback->created_at}} 
                                        </td>
                                                                      
                                      
                                        <td>
                                            <span><a href="{{route('showFeed',$feedback->id)}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $feedback->id }}"><i class="ti-eye color-default"></i></a> </span>
                                            <span><a href="{{route('editFeed',$feedback->id)}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $feedback->id }}"><i class="ti-pencil-alt color-success"></i></a></span>
        
                                        <span><a  href="{{route('delFeed',$feedback->id)}}" class="delete" data-toggle="tooltip" title="@lang('Supprimer ') {{ $feedback->id }}"><i class="btn ti-trash color-danger"></i> </a></span>
                                        </td>
                                    </tr>
                            @endforeach
                              </tbody>
                            </table>
                        </div>
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
            title: '@lang('Vraiment supprimer cet feedback  ?')',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '@lang('Oui')',
            cancelButtonText: '@lang('Non')',
            
        }).then((result) => {
            if (result.value) {
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('href'),
                        type: 'PUT',
                        success : function(data){
                            console.log('Ok :'+data);
                        },
                        error : function(data){
                            console.log('not Ok :'+data['error']);
                        }
                    })
                    .done(function () {
                            that.parents('tr').remove()
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
