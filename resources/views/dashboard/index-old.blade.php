@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
    <!-- Add custom styles here -->

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/buttons/v1.6.3/css/buttons.dataTables.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('adminBSB-master/plugins/jquery-albe-timeline/templates/simple/style-albe-timeline.css') }}" rel="stylesheet">
    <style>
        .panel-body {
            padding: 0px;
        }
    </style>
@endsection

@section('section_content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">SOLD</div>
                            <div class="number count-to" data-from="0" data-to="{{ $purchaseForArr['sold'] ?? 0 }}" data-speed="20" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">RENT</div>
                            <div class="number count-to" data-from="0" data-to="{{ $purchaseForArr['rent'] ?? 0 }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">FIXED</div>
                            <div class="number count-to" data-from="0" data-to="{{ $purchaseForArr['fixed'] ?? 0 }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">OTHER</div>
                            <div class="number count-to" data-from="0" data-to="{{ $purchaseForArr['other'] ?? 0 }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            {{-- <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- #END# CPU Usage -->
            {{-- <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff" data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)" data-fill-Color="rgba(0, 188, 212, 0)">
                                12,10,9,6,5,6,10,5,7,5,12,13,7,12,11
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>1 200</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>3 872</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>26 582</b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">LATEST SOCIAL TRENDS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    #socialtrends
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    #materialdesign
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>#adminbsb</li>
                                <li>#freeadmintemplate</li>
                                <li>#bootstraptemplate</li>
                                <li>
                                    #freehtmltemplate
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div> --}}

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>PR STATUS INFO</h2>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
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
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th class="">STATUS</th>
                                            <th class="text-center">COUNT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prStatusCount as $key => $item)
                                        <tr>
                                            <td>{{ ucwords($item->status) }}</td>
                                            <td class="text-center">{{ $item->total }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>PR HISTORY</h2>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
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
                            <div class="">
                                <table id="dtIndex" class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No PR</th>
                                            <th>Puchase For</th>
                                            <th>Request By</th>
                                            <th>Notes</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Histories of Purchase Request: <b class="font-bold col-red no-pr"></b> </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="thumbnail" style="padding: 1.3em">
                                <div id="myTimeline">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="submit" class="btn btn-primary waves-effect" id="btn-submit-item">Submit</button> --}}
                    {{-- <button type="reset" class="btn btn-warning waves-effect">Reset</button> --}}
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('adminBSB-master/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/responsive/v2.2.5/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-datatable/extensions/buttons/v1.6.3/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-albe-timeline/jquery-albe-timeline.min.js') }}"></script>
    <script src="{{ asset('adminBSB-master/plugins/jquery-albe-timeline/templates/simple/data-albe-timeline.js') }}"></script>

    <!-- Custom Js -->
    <script type="text/javascript">
        $(function(){
            //** Do something here with JQuery **//
            //Widgets count
            $('.count-to').countTo();

            //Sales count to
            $('.sales-count-to').countTo({
                formatter: function (value, options) {
                    return '$' + value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, ' ').replace('.', ',');
                }
            });

            var dtIndex = $('#dtIndex').DataTable({
                stateSave:true,
                processing: true,
                responsive: true,
                serverSide: true,
                autoWidth: false,
                scrollCollapse: true,
                ajax: {
                    url: "{!! route('purchaseRequest.dtIndex') !!}",
                    type: "GET",
                },
                columns: [
                    { data: 'no_pr', name: 'no_pr', width: '5%', className:'text-center', defaultContent: 'N/A', orderable: false },
                    { data: 'purchase_for', name: 'purchase_for', width: '5%', defaultContent: 'N/A',
                        render: function (data, type, row) {
                            return data !== null ? data.toUpperCase() : 'N/A';
                        }
                    },
                    { data: 'request_by', name: 'request_by', width: '5%', defaultContent: 'N/A', 
                        render: function (data, type, row) {
                            return data !== null ? data.name : 'N/A';
                        }
                    },
                    { data: 'notes_and_purpose_for', name: 'notes_and_purpose_for', width: '10%', defaultContent: 'N/A'},
                    { data: 'status', name: 'status', width: '5%', defaultContent: 'N/A',
                        render: function (data, type, row) {
                            return data.ucwords();
                        }
                    },
                    { data: 'id', name: 'id', width: '5%', className: 'text-center', orderable: false,
                        render: function (data, type, row) {
                            var action = "";

                            action += " <button data-no-pr='"+row.no_pr+"' data-history='"+row.histories+"' class='btn btn-success btn-xs waves-effect btn-pr-history' title='History'><i class='material-icons'>history</i></button>";
                            action += " <a href='{{ route('purchaseRequest.index') }}' class='btn btn-primary btn-xs waves-effect' title='Goto Action Page'><i class='material-icons'>link</i></a>";

                            return action;
                        }
                    }
                ]
            });

            $('body').on('click', '.btn-pr-history', function() {
                var noPR = $(this).attr('data-no-pr');
                var histories = $(this).attr('data-history');

                $('.no-pr').text(noPR);
                $('#myModal').modal( {show: true, backdrop: 'static', 'keyboard': false} );

                $("#myTimeline").albeTimeline(histories, {
                    language: "idn",
                    formatDate: 'DD, dd MMMM yyyy',
                    showMenu: false,
                    sortDesc: true,
                    showGroup: false
                });

            });
        });

    </script>
@endsection