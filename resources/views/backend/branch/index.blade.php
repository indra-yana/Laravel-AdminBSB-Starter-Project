@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')

@section('title', 'Branch')

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
                                    <a href="{{ route('branch.create') }}" class="btn btn-primary btn-sm waves-effect text-right">
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
                                        <th>Branch Code</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Branch Code</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <form id="delete-form" action="{{ route('branch.delete') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" id="deleteID" name="deleteID" />
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
        ajax: {
            url: "{!! route('branch.dtIndex') !!}",
            type: "GET",
        },
        columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '2%', className:'text-center' },
                { data: 'name', name: 'name', width: '10%', defaultContent: 'N/A'},
                { data: 'code', name: 'code', width: '5%', defaultContent: 'N/A'},
                { data: 'description', name: 'description', width: '15%', defaultContent: 'N/A'},
                { data: 'id', name: 'id', width: '5%', className: 'text-center',
                    render: function (data, type, row) {
                        var actEdit   = " <a href='/branches/"+data+"/edit' class='btn btn-warning btn-xs waves-effect' title='Edit'><i class='material-icons'>mode_edit</i></a>";
                        var actDelete = " <button id='delete-button' data-id='"+data+"' class='btn btn-danger btn-xs waves-effect delete' title='Delete'><i class='material-icons'>delete</i></button>";
                        
                        return actEdit + actDelete;
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
    });
  </script>
@endsection