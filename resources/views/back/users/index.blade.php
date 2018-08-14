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
            <a href="{{route('addUser')}}" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i class="ti-user"></i>@lang('Ajouter un utilisateur')</a>
                
                <div class="card-body">
                        <div class="table-responsive" style="overflow-x: inherit !important;">
                            <table  id="example" class=" table student-data-table  m-t-20 "  style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('Nom')</th>                                        
                                        <th>@lang('Email')</th>
                                        <th>@lang('Adresse')</th>
                                        <th>@lang('Secteur d\'activité')</th>
                                        <th>@lang('Nombre d\'utilisateurs')</th>
                                        <th>@lang('Date d\'inscription')</th>
                                        <th>@lang('rôle')</th>
                                        <th>@lang('Action') <span style="color: white;">xxxxxxxxx</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                        {{$user->civilite}} {{$user->nom}} {{$user->prenom}}
                                        </td>
                                        <td>
                                        {{$user->email}} 
                                        </td>
                                        <td>
                                        {{$user->adresse}} 
                                        </td>
                                        <td>
                                        {{$user->secteur}} 
                                        </td>
                                        <td>
                                        2 
                                        </td>
                                        <td>
                                        {{$user->created_at->format('d-m-y')}} 
                                        </td>

                                        <td>
                                            @if($user->role == "admin")
                                                @php($color = "danger")
                                                @php($stat = "admin")
                                            @elseif($user->role == "utilisateur")
                                                @php($color = "success")
                                                @php($stat = "utilisateur")
                                            @endif
                                        <span class="badge badge-{{$color}}">{{$stat}}</span>
                                        
                                        </td>
                                        
                                                                      
                                      
                                        <td>
                                            <span><a href="{{route('showUser',$user->id)}}" data-toggle="tooltip" title="@lang('Détails de ') {{ $user->id }}"><i class="ti-eye color-default"></i></a> </span>
                                            @if($user->role == "admin")

                                            <span><a href="{{route('editUser',$user->id)}}" data-toggle="tooltip" title="@lang('Modifier ') {{ $user->id }}"><i class="ti-pencil-alt color-success"></i></a></span>
                                            @endif
        
                                        <span><a  href="{{route('deleteUser',$user->id)}}" class="delete" data-toggle="tooltip" title="@lang('Supprimer ') {{ $user->id }}"><i class="btn ti-trash color-danger"></i> </a></span>
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
            title: '@lang('Vraiment supprimer cet utilisateur  ?')',
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
                        type: 'POST',
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
                'Cet utilisateur a bien été supprimé.',
                'success'
                )
                
                
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                'Annulé',
                'ce utilisateur n\'a pas été supprimé :)',
                'error'
                )
            }
        })
            })
        })
</script>
@endsection
