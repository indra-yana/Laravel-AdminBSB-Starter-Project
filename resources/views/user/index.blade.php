@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')

@section('title', 'User')

@section('styles')
  <!-- Add custom styles here -->

  <!-- JQuery DataTable Css -->
  <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h2>
                                    <a href="{{ route('home') }}" class="btn bg-blue-grey btn-circle waves-effect waves-circle waves-float" title="Home">
                                        <i class="material-icons">home</i>
                                    </a>
                                    List of {{ ucwords(Utils::splitCamelCase(explode('.', request()->route()->getName())[0])) }} 
                                </h2>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 align-right">
                                <h2>
                                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm waves-effect text-right">
                                        <i class="material-icons">add_to_queue</i>
                                        <span>ADD</span>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        @if (session('message'))
                            <div class="alert alert-{{ session('type') }}">
                            {!! session('message') !!}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="dtIndex" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Branch</th>
                                        <th>Privilege</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Branch</th>
                                        <th>Privilege</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <form id="delete-form" action="{{ route('user.delete') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" id="deleteID" name="deleteID" />
                        </form>
                        <form id="activate-inactivate-form" action="{{ route('user.activateOrInactivate') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" id="paramID_user" name="paramID_user" />
                            <input type="hidden" id="paramID_status" name="paramID_status" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Jquery DataTable Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.min.js') }}"></script>
  
  <!-- Custom Js -->
  <script type="text/javascript">
    $(function () {
      //** Do something here with JQuery **//
    //   $('.js-basic-example').DataTable({
    //     responsive: true
    //   });

      //Exportable table
    //   $('.js-exportable').DataTable({
    //       dom: 'Bfrtip',
    //       responsive: true,
    //       buttons: [
    //           'copy', 'csv', 'excel', 'pdf', 'print'
    //       ]
    //   });

      var dtIndex = $('#dtIndex').DataTable({
        stateSave:true,
        processing: true,
        responsive: true,
        serverSide: true,
        autoWidth: false,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            }
        ],
        ajax: {
            url: "{!! route('user.dtIndex') !!}",
            type: "GET",
        },
        columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '2%', className:'text-center' },
                { data: 'name', name: 'name', width: '10%', defaultContent: 'N/A'},
                { data: 'email', name: 'email', width: '15%', defaultContent: 'N/A'},
                { data: 'branch', name: 'branch', width: '10%', defaultContent: 'N/A', 
                    render: function (data, type, row) {
                        var branch = [];
                        $.each(row.branch, function(key, item) {
                            branch.push(item.code);
                        });

                        return branch.length > 0 ? branch.join(', ') : 'N/A';
                    }
                },
                { data: 'id', name: 'id', width: '5%', className: 'text-center',
                    render: function (data, type, row) {
                        var actPermission   = " <a href='/users/"+data+"/permission' class='btn btn-info btn-xs waves-effect' title='Add Permissions'><i class='material-icons'>accessibility</i></a>";
                        var actRole   = " <a href='/users/"+data+"/role' class='btn bg-indigo btn-xs waves-effect' title='Add Roles'><i class='material-icons'>accessible</i></a>";
                        
                        return actPermission +actRole;
                    }
                },
                { data: 'id', name: 'id', width: '5%', className: 'text-center',
                    render: function (data, type, row) {
                        var disabled = data == '{{ Auth::user()->id }}' ? 'disabled' : '';

                        var actEdit   = " <a href='/users/"+data+"/edit' class='btn btn-warning btn-xs waves-effect' title='Edit'><i class='material-icons'>mode_edit</i></a>";
                        var actDelete = " <button id='delete-button' data-id='"+data+"' class='btn btn-danger btn-xs waves-effect delete' title='Delete' "+disabled+"><i class='material-icons'>delete</i></button>";
                        var actIsActive = is_active(row, disabled);
                        
                        return actIsActive +actEdit + actDelete;
                    }
                }
            ]
        });

        $('body').on('click', '.delete', function() {
            $('#deleteID').val($(this).attr('data-id'));
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover deleted data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                $('#delete-form').submit();
            });
        });

        $('body').on('click', '#activate-inactivate-button', function() {
            var id = $(this).attr('data-id').split("|")[0];
            var name = $(this).attr('data-id').split("|")[1];
            var status = $(this).attr('data-id').split("|")[2];

            $('#paramID_user').val(id);
            $('#paramID_status').val(status);
            swal({
                title: "Are you sure?",
                html: true,
                text: "The <b>" +name +"</b> will be <b>" +status +"</b> from database.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, " +status +"!",
            }, function() {
                $('#activate-inactivate-form').submit();
            });
        });

    });

    function is_active(row, disabled) { 
        switch (row.is_active) {
            case 0: 
                return " <button id='activate-inactivate-button' data-id='"+row.id+"|"+row.name+"|Activate"+"' class='btn btn-danger btn-xs waves-effect' title='Click to Activate' "+disabled+"><i class='material-icons'>visibility_off</i></button>";
            case 1: 
                return " <button id='activate-inactivate-button' data-id='"+row.id+"|"+row.name+"|Inactivate"+"' class='btn btn-success btn-xs waves-effect' title='Click to Inactivate' "+disabled+"><i class='material-icons'>visibility</i></button>";
            default: 
                return " <button id='activate-inactivate-button' data-id='"+row.id+"|"+row.name+"|Activate"+"' class='btn btn-warning btn-xs waves-effect' title='Click to Activate'><i class='material-icons'>visibility_off</i></button>";
        }
     }
  </script>
@endsection