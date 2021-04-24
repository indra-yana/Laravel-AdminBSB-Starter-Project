@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')

@section('title', 'User Permission')

@section('styles')
  <!-- Add custom styles here -->

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBSB-master/plugins/jquery-multi-select/css/multi-select.css') }}" rel="stylesheet">
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="{{ route('user.index') }}" class="btn bg-blue-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">arrow_back</i>
                            </a>
                            Add a User {{ ucwords(explode('.', request()->route()->getName())[1]) }}
                        </h2>
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="">
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect ">
                                    <i class="material-icons">add_to_queue</i>&nbsp;Add
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('user.store.permission') }}" enctype="multipart/form-data" id="form-input">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @csrf
                                    <input type="hidden" name="id_user" value="{{ $user->id }}" required/>
                                    <div class="form-group">
                                        <label>User *</label>
                                        <div class="form-line @error('name') error focused @enderror">
                                            <input type="text" name="name" id="name" class="form-control" placeholder=" Enter Name" autocomplete="off" value="{{ $user->name }}" required readonly/>
                                        </div>
                                        @error('name')
                                            <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group @error('id_permission.*') error focused @enderror">
                                        <label>Available Permissions *</label>
                                        <select class="ms" name="id_permission[]" id="id_permission" multiple="multiple" required>
                                            {{-- <option value="">- Choose Permissions - </option> --}}
                                            @foreach ($permissions as $key => $value)
                                                <option value="{{ $value->id }}" {{ is_array(old('id_permission')) && in_array($value->id, old('id_permission')) ? 'selected' : '' }}>{{ ++$key .'. ' .$value->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_permission.*')
                                            <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="btn-submit">Submit</button>
                            <button type="reset" class="btn btn-warning m-t-15 waves-effect">Reset</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            List of {{ ucwords(explode('.', request()->route()->getName())[1]) }}
                            {{-- <a href="{{ route('user.index') }}" class="btn btn-info btn-xs waves-effect text-right">
                                <i class="material-icons">arrow_back</i>
                                <span>BACK</span>
                            </a> --}}
                        </h2>
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="">
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect ">
                                    <i class="material-icons">add_to_queue</i>&nbsp;Add
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> --}}
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
                                        <th>Selected Permissions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Selected Permissions</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <form id="delete-form" action="{{ route('user.delete.permission') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" id="paramID_user" name="paramID_user" value="{{ $user->id }}" />
                            <input type="hidden" id="paramID_permission" name="paramID_permission" />
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
    <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-multi-select/js/jquery-multi-select.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-multi-select/js/jquery.quicksearch.js') }}"></script>

    <!-- Custom Js -->
    <script type="text/javascript">
        $(function () {
            $('#form-input').on('submit', function () { 
                $('#btn-submit').text('Loading...').prop('disabled', true);
            });
    
            $('#id_permission').multiSelect({
                selectableHeader: "<input type='text' class=' form-control' autocomplete='off' placeholder='Search Selectable'>",
                selectionHeader: "<input type='text' class=' form-control' autocomplete='off' placeholder='Search Selection'>",
                afterInit: function(ms){
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString).on('keydown', function(e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString).on('keydown', function(e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
                },
                afterSelect: function() {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function() {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

            var dtIndex = $('#dtIndex').DataTable({
                stateSave:true,
                processing: true,
                responsive: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: "{!! route('user.dtIndex.permission') !!}",
                    type: "GET",
                    data: { paramID: '{!! $user->id !!}' }
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '2%', className:'text-center' },
                    { data: 'name', name: 'name', width: '10%', defaultContent: 'N/A'},
                    { data: 'id', name: 'id', width: '5%', className: 'text-center',
                        render: function (data, type, row) {
                            var actDelete = " <button id='delete-button' data-id='"+data+"' class='btn btn-danger btn-xs waves-effect delete' title='Delete'><i class='material-icons'>delete</i></button>";
                            
                            return actDelete;
                        }
                    }
                ]
            });

            $('body').on('click', '.delete', function() {
                $('#paramID_permission').val($(this).attr('data-id'));
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