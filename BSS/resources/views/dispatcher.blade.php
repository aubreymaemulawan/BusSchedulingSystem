@extends('layouts.app')
@section('title','Manage Dispatchers')

@section('modal')
    <!-- Adding New Data -->
        <div class="modal fade" id="main-modal" tabindex="-1" role="dialog" aria-labelledby="main-modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form enctype="multipart/form-data" id="image-upload" >
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#4e73df">
                        <h5 id="header-modal" class="modal-title" id="main-modalLabel" style="color:white;"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    
                    <input type="hidden" class="form-control" id="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('pub/img/default.jpg') }}" alt="profile_image" class="css-shadow center shadow-4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="company_id">Company</label>
                                <select name="company_id" class="form-control" data-style="btn btn-link" id="company_id">
                                @foreach ($company as $comp)
                                    @if($comp->is_active==1)
                                        <option value="{{ $comp->id }}">{{ $comp->company_name }}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input name="last_name" type="text" class="form-control" id="last_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input name="first_name" type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="number" class="form-control" id="age">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no">Contact Number</label>
                                <input name="contact_no" type="number" class="form-control" id="contact_no">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="profile_picture">Profile Picture</label>
                                <input name="profile_picture" type="file" class="form-control" id="profile_picture">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="is_active">Status</label>
                                <select name="is_active" class="form-control" data-style="btn btn-link" id="is_active">
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="submit" type="submit" class="btn btn-primary" style="background-color:#4e73df">Create</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    <!-- End of Adding Modal -->

    <!-- Updating Old Data -->
        <div class="modal fade" id="edit-main-modal" tabindex="-1" role="dialog" aria-labelledby="edit-main-modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form enctype="multipart/form-data" id="edit-image-upload" >
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#4e73df">
                        <h5 id="edit-header-modal" class="modal-title" id="edit-main-modalLabel" style="color:white;"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    
                    <input type="hidden" name="edit-id" class="form-control" id="edit-id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="avatar avatar-xl position-relative">
                                <img id="img" src="{{ asset('pub/img/default.jpg') }}" alt="profile_image" class="css-shadow center shadow-4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-company_id">Company</label>
                                <select name="edit-company_id" class="form-control" data-style="btn btn-link" id="edit-company_id">
                                @foreach ($company as $comp)
                                    <option value="{{ $comp->id }}">{{ $comp->company_name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-last_name">Last Name</label>
                                <input name="edit-last_name" type="text" class="form-control" id="edit-last_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-first_name">First Name</label>
                                <input name="edit-first_name" type="text" class="form-control" id="edit-first_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-age">Age</label>
                                <input name="edit-age" type="number" class="form-control" id="edit-age">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-contact_no">Contact Number</label>
                                <input name="edit-contact_no" type="number" class="form-control" id="edit-contact_no">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-address">Address</label>
                                <input name="edit-address" type="text" class="form-control" id="edit-address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-profile_picture">Profile Picture</label>
                                <input name="edit-profile_picture" type="file" class="form-control" id="edit-profile_picture">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit-is_active">Status</label>
                                <select name="edit-is_active" class="form-control" data-style="btn btn-link" id="edit-is_active">
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="submit" type="submit" class="btn btn-primary" style="background-color:#4e73df">Save</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    <!-- End of Updating Data -->
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dispatcher List</h1>
        
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        @if(DB::table('company')->where('is_active','1')->exists())
            <div class="card-header py-3">
                <button onclick="Add()" type="button" class="btn btn-sm btn btn-success">Add New</button>
            </div>
        @else
            <div class="card-header py-3">
                <button onclick="Error()" type="button" class="btn btn-sm btn btn-success">Add New</button>
            </div>
        @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Age</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dispatcher as $dispatch)
                                @if($dispatch->company->is_active==1)
                                <tr>
                                    <td>
                                        @if($dispatch->profile_path==null)
                                            <img src="{{ asset('pub/img/default.jpg') }}" width="50" height="50" class="css-shadow2 center shadow-4">
                                        @else
                                            <?php
                                                $str = $dispatch->profile_path;
                                                $str = ltrim($str, 'public/');
                                            ?>
                                            <img src="{{ asset('../storage/'.$str) }}" width="50" height="50" class="css-shadow2 center shadow-4">
                                        @endif
                                    </td>
                                    <td>{{$dispatch->last_name}}, {{$dispatch->first_name}}</td>
                                    <td>{{$dispatch->company->company_name}}</td>
                                    <td>{{$dispatch->age}}</td>
                                    <td>{{$dispatch->contact_no}}</td>
                                    <td>{{$dispatch->address}}</td>
                                    @if ($dispatch->is_active == 1)
                                    <td style="color:#1cc88a"><strong>Active</strong></td>
                                    @elseif ($dispatch->is_active == 2)
                                    <td style="color:#e74a3b"><strong>Inactive</strong></td>
                                    @endif
                                    </td>
                                    <td>
                                        @if($dispatch->profile_path==null)
                                        <button  onclick="Edit({{ $dispatch->id }},document.getElementById('img').src='{{ asset('pub/img/default.jpg') }}')" class="btn btn-sm btn-warning "><i class="fa fa-pencil"></i></button>
                                        @else
                                        <button  onclick="Edit({{ $dispatch->id }},document.getElementById('img').src='{{ asset('../storage/'.$str) }}')" class="btn btn-sm btn-warning "><i class="fa fa-pencil"></i></button>
                                        @endif
                                    </td>  
                                    <td>
                                        <button onclick="Delete({{ $dispatch->id }})" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
 
@section('scripts')
    <script>
        $(document).ready(
            function (e) {
                $('#dataTable').DataTable();
                // Add/Create Data
                $(document).on('submit','#image-upload', function(e) {
                    e.preventDefault();
                    let addformData = new FormData($('#image-upload')[0]);
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/api/dispatcher/create') }}",
                                data: addformData,
                                cache: false,
                                dataType: 'json',
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    var dialog = bootbox.dialog({
                                        centerVertical: true,
                                        title: 'Saving Information',
                                        message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                                    });
                                    $('#main-modal').modal('hide');
                                    dialog.init(function(){
                                        setTimeout(function(){
                                            dialog.find('.bootbox-body').html('Information Successfully saved!');
                                            window.location.reload();
                                        }, 3000);
                                    });
                                },
                                error: function(data){
                                console.log(data);
                                }
                            }
                        );
                    }
                );
                // Update/Edit Data
                $(document).on('submit','#edit-image-upload', function(e) {
                    e.preventDefault();
                    let editformData = new FormData($('#edit-image-upload')[0]);
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/api/dispatcher/update') }}",
                                data: editformData,
                                cache: false,
                                dataType: 'json',
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    var dialog = bootbox.dialog({
                                        centerVertical: true,
                                        title: 'Updating Information',
                                        message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                                    });
                                    $('#edit-main-modal').modal('hide');
                                    dialog.init(function(){
                                        setTimeout(function(){
                                            dialog.find('.bootbox-body').html('Information Successfully updated!');
                                            window.location.reload();
                                        }, 3000);
                                        
                                    });
                                },
                                error: function(data){
                                console.log(data);
                                }
                            }
                        );
                    }
                );
                
            } 
        );
        
        $('[id^="menu-"]').removeClass('active')
        $('#menu-dispatcher').addClass('active')
        $('[id^="main"]').removeClass('active')
        $('#main-dispatcher').addClass('active')
        $('#collapseDispatcher').addClass('show')
        
        function Error(){
            bootbox.alert({
                message: "Please check your Company List and activate status!",
                centerVertical: true,
                size: 'medium'
            });
        }

        function Add(){
            document.getElementById("header-modal").innerHTML="Dispatcher Information"
            $('#id').val('-1'),
            $('#last_name').val(''),
            $('#first_name').val(''),
            $('#company_id').val(''),
            $('#age').val(''),
            $('#contact_no').val(''),
            $('#address').val(''),
            $('#profile_picture').val(''),
            $('#is_active').val(''),
            $('#main-modal').modal(
                {'show':true}
            )
        }      

        function Edit(id) {
            document.getElementById("edit-header-modal").innerHTML="Edit Information"
            Controller.Post('/api/dispatcher/items', { 'id': id }).done(function(result) {
                $('#edit-id').val(result.id),
                $('#edit-last_name').val(result.last_name),
                $('#edit-first_name').val(result.first_name),
                $('#edit-company_id').val(result.company_id),
                $('#edit-age').val(result.age),
                $('#edit-contact_no').val(result.contact_no),
                $('#edit-address').val(result.address),
                $('#edit-profile_picture').val(result.profile_picture),
                $('#edit-is_active').val(result.is_active),
                $('#edit-main-modal').modal({
                    'show': true
                })
            })
        }

        function Delete(id) {
            bootbox.confirm({
                title: "Deleting Information",
                message: "Are you sure you want to delete this item? This cannot be undone.",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancel'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirm'
                    }
                },
                centerVertical: true,
                callback: function(result){
                    if(result) {
                        Controller.Post('/api/dispatcher/delete', { 'id': id }).done(function(result) {
                            
                            var dialog = bootbox.dialog({
                                centerVertical: true,
                                title: 'Deleting Information',
                                message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                            });
                            dialog.init(function(){
                                setTimeout(function(){
                                    dialog.find('.bootbox-body').html('Information Successfully deleted!'+result.email);
                                    window.location.reload();
                                }, 3000);
                                
                            });
                        });
                        

                    }
                }
            })
        }

    </script>
@endsection