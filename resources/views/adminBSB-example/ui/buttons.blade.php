@extends('adminBSB-example.layouts.app_layout')

@extends('adminBSB-example.layouts.section_top_nav')
@extends('adminBSB-example.layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
  <!-- Add custom styles here -->
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BUTTONS</h2>
        </div>
        <!-- Bootstrap Default Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BOOTSTRAP DEFAULT BUTTONS
                            <small>Use any of the available button classes to quickly create a styled button</small>
                        </h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-default waves-effect">DEFAULT</button>
                            <button type="button" class="btn btn-primary waves-effect">PRIMARY</button>
                            <button type="button" class="btn btn-success waves-effect">SUCCESS</button>
                            <button type="button" class="btn btn-info waves-effect">INFO</button>
                            <button type="button" class="btn btn-warning waves-effect">WARNING</button>
                            <button type="button" class="btn btn-danger waves-effect">DANGER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bootstrap Default Buttons -->
        <!-- Metarial Design Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            METARIAL DESIGN BUTTONS
                            <small>Use any of the available button classes to quickly create a styled button</small>
                        </h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn bg-red waves-effect">RED</button>
                            <button type="button" class="btn bg-pink waves-effect">PINK</button>
                            <button type="button" class="btn bg-purple waves-effect">PURPLE</button>
                            <button type="button" class="btn bg-deep-purple waves-effect">DEEP PURPLE</button>
                            <button type="button" class="btn bg-indigo waves-effect">INDIGO</button>
                            <button type="button" class="btn bg-blue waves-effect">BLUE</button>
                            <button type="button" class="btn bg-light-blue waves-effect">LIGHT BLUE</button>
                            <button type="button" class="btn bg-cyan waves-effect">CYAN</button>
                            <button type="button" class="btn bg-teal waves-effect">TEAL</button>
                            <button type="button" class="btn bg-green waves-effect">GREEN</button>
                            <button type="button" class="btn bg-light-green waves-effect">LIGHT GREEN</button>
                            <button type="button" class="btn bg-lime waves-effect">LIME</button>
                            <button type="button" class="btn bg-yellow waves-effect">YELLOW</button>
                            <button type="button" class="btn bg-amber waves-effect">AMBER</button>
                            <button type="button" class="btn bg-orange waves-effect">ORANGE</button>
                            <button type="button" class="btn bg-deep-orange waves-effect">DEEP ORANGE</button>
                            <button type="button" class="btn bg-brown waves-effect">BROWN</button>
                            <button type="button" class="btn bg-grey waves-effect">GREY</button>
                            <button type="button" class="btn bg-blue-grey waves-effect">BLUE GREY</button>
                            <button type="button" class="btn bg-black waves-effect waves-light">BLACK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Metarial Design Buttons -->
        <!-- Button Sizes -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BUTTON SIZES
                            <small>You can resize the buttons</small>
                        </h2>
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
                        <div class="row clearfix demo-button-sizes">
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-red btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-red btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-red btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-red btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-pink btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-pink btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-pink btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-cyan btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-cyan btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-cyan btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-teal btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-teal btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-teal btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-orange btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-orange btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-orange btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                <button type="button" class="btn bg-purple btn-block btn-lg waves-effect">LARGE</button>
                                <button type="button" class="btn bg-purple btn-block waves-effect">DEFAULT</button>
                                <button type="button" class="btn bg-purple btn-block btn-sm waves-effect">SMALL</button>
                                <button type="button" class="btn bg-purple btn-block btn-xs waves-effect">EXTRA SMALL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Sizes -->
        <!-- Block Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BLOCK BUTTONS
                            <small>Create block level buttons</small>
                        </h2>
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
                        <div class="demo-button">
                            <button type="button" class="btn btn-block btn-lg btn-default waves-effect">DEFAULT</button>
                            <button type="button" class="btn btn-block btn-lg btn-primary waves-effect">PRIMARY</button>
                            <button type="button" class="btn btn-block btn-lg btn-success waves-effect">SUCCESS</button>
                            <button type="button" class="btn btn-block btn-lg btn-info waves-effect">INFO</button>
                            <button type="button" class="btn btn-block btn-lg btn-warning waves-effect">WARNING</button>
                            <button type="button" class="btn btn-block btn-lg btn-danger waves-effect">DANGER</button>
                            <button type="button" class="btn btn-block btn-lg bg-red waves-effect">RED</button>
                            <button type="button" class="btn btn-block btn-lg bg-pink waves-effect">PINK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Block Buttons -->
        <!-- Disabled Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DISABLED BUTTONS
                            <small>Make buttons look unclickable by fading them back with opacity</small>
                        </h2>
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
                        <div class="button-demo">
                            <button type="button" class="btn btn-default waves-effect" disabled="disabled">DEFAULT</button>
                            <button type="button" class="btn btn-primary waves-effect" disabled="disabled">PRIMARY</button>
                            <button type="button" class="btn btn-success waves-effect" disabled="disabled">SUCCESS</button>
                            <button type="button" class="btn btn-info waves-effect" disabled="disabled">INFO</button>
                            <button type="button" class="btn btn-warning waves-effect" disabled="disabled">WARNING</button>
                            <button type="button" class="btn btn-danger waves-effect" disabled="disabled">DANGER</button>
                            <button type="button" class="btn bg-red waves-effect" disabled="disabled">RED</button>
                            <button type="button" class="btn bg-pink waves-effect" disabled="disabled">PINK</button>
                            <button type="button" class="btn bg-purple waves-effect" disabled="disabled">PURPLE</button>
                            <button type="button" class="btn bg-deep-purple waves-effect" disabled="disabled">DEEP PURPLE</button>
                            <button type="button" class="btn bg-indigo waves-effect" disabled="disabled">INDIGO</button>
                            <button type="button" class="btn bg-blue waves-effect" disabled="disabled">BLUE</button>
                            <button type="button" class="btn bg-light-blue waves-effect" disabled="disabled">LIGHT BLUE</button>
                            <button type="button" class="btn bg-cyan waves-effect" disabled="disabled">CYAN</button>
                            <button type="button" class="btn bg-teal waves-effect" disabled="disabled">TEAL</button>
                            <button type="button" class="btn bg-green waves-effect" disabled="disabled">GREEN</button>
                            <button type="button" class="btn bg-light-green waves-effect" disabled="disabled">LIGHT GREEN</button>
                            <button type="button" class="btn bg-lime waves-effect" disabled="disabled">LIME</button>
                            <button type="button" class="btn bg-yellow waves-effect" disabled="disabled">YELLOW</button>
                            <button type="button" class="btn bg-amber waves-effect" disabled="disabled">AMBER</button>
                            <button type="button" class="btn bg-orange waves-effect" disabled="disabled">ORANGE</button>
                            <button type="button" class="btn bg-deep-orange waves-effect" disabled="disabled">DEEP ORANGE</button>
                            <button type="button" class="btn bg-brown waves-effect" disabled="disabled">BROWN</button>
                            <button type="button" class="btn bg-grey waves-effect" disabled="disabled">GREY</button>
                            <button type="button" class="btn bg-blue-grey waves-effect" disabled="disabled">BLUE GREY</button>
                            <button type="button" class="btn bg-black waves-effect waves-light" disabled="disabled">BLACK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Disabled Buttons -->
        <!-- Icon Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ICON BUTTONS
                            <small>Make icon buttons</small>
                        </h2>
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
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-success waves-effect">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-warning waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn bg-red waves-effect">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn bg-purple waves-effect">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn bg-deep-purple waves-effect">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn bg-indigo waves-effect">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn bg-blue waves-effect">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn bg-light-blue waves-effect">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn bg-cyan waves-effect">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn bg-teal waves-effect">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn bg-green waves-effect">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn bg-light-green waves-effect">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn bg-lime waves-effect">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn bg-yellow waves-effect">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn bg-amber waves-effect">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn bg-orange waves-effect">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn bg-deep-orange waves-effect">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn bg-brown waves-effect">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn bg-grey waves-effect">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn bg-blue-grey waves-effect">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn bg-black waves-effect waves-light">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo m-t-25">
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn bg-indigo btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn bg-lime btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn bg-amber btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn bg-orange btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn bg-brown btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn bg-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn bg-blue-grey btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn bg-black btn-circle waves-effect waves-circle waves-float waves-light">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <h2 class="card-inside-title">
                            Large Circle
                        </h2>
                        <div class="icon-button-demo m-t-25">
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                        <div class="icon-button-demo">
                            <button type="button" class="btn btn-primary btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">extension</i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">home</i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">lock</i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">perm_scan_wifi</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">flight_takeoff</i>
                            </button>
                            <button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">print</i>
                            </button>
                            <button type="button" class="btn bg-pink btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">report_problem</i>
                            </button>
                            <button type="button" class="btn bg-purple btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">search</i>
                            </button>
                            <button type="button" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">settings</i>
                            </button>
                            <button type="button" class="btn bg-indigo btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">trending_up</i>
                            </button>
                            <button type="button" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">verified_user</i>
                            </button>
                            <button type="button" class="btn bg-light-blue btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">mic</i>
                            </button>
                            <button type="button" class="btn bg-cyan btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">call_missed_outgoing</i>
                            </button>
                            <button type="button" class="btn bg-teal btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">forum</i>
                            </button>
                            <button type="button" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">email</i>
                            </button>
                            <button type="button" class="btn bg-light-green btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">chat</i>
                            </button>
                            <button type="button" class="btn bg-lime btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">vpn_key</i>
                            </button>
                            <button type="button" class="btn bg-yellow btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">content_cut</i>
                            </button>
                            <button type="button" class="btn bg-amber btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">drafts</i>
                            </button>
                            <button type="button" class="btn bg-orange btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">save</i>
                            </button>
                            <button type="button" class="btn bg-deep-orange btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">weekend</i>
                            </button>
                            <button type="button" class="btn bg-brown btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">access_alarm</i>
                            </button>
                            <button type="button" class="btn bg-grey btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">location_searching</i>
                            </button>
                            <button type="button" class="btn bg-blue-grey btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">merge_type</i>
                            </button>
                            <button type="button" class="btn bg-black btn-circle-lg waves-effect waves-circle waves-float waves-light">
                                <i class="material-icons">publish</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Icon Buttons -->
        <!-- Icon & Text Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ICON & TEXT BUTTONS
                            <small>Make icon & text buttons</small>
                        </h2>
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
                        <div class="icon-and-text-button-demo">
                            <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">extension</i>
                                <span>EXTENSION</span>
                            </button>
                            <button type="button" class="btn btn-success waves-effect">
                                <i class="material-icons">home</i>
                                <span>HOME</span>
                            </button>
                            <button type="button" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                                <span>LOCK</span>
                            </button>
                            <button type="button" class="btn btn-warning waves-effect">
                                <i class="material-icons">perm_scan_wifi</i>
                                <span>SCAN WIFI</span>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect">
                                <i class="material-icons">flight_takeoff</i>
                                <span>TAKE OFF</span>
                            </button>
                            <button type="button" class="btn bg-red waves-effect">
                                <i class="material-icons">print</i>
                                <span>PRINT...</span>
                            </button>
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">report_problem</i>
                                <span>REPORT ISSUE</span>
                            </button>
                            <button type="button" class="btn bg-purple waves-effect">
                                <i class="material-icons">search</i>
                                <span>SEARCH</span>
                            </button>
                            <button type="button" class="btn bg-deep-purple waves-effect">
                                <i class="material-icons">settings</i>
                                <span>SETTINGS</span>
                            </button>
                            <button type="button" class="btn bg-indigo waves-effect">
                                <i class="material-icons">trending_up</i>
                                <span>TRENDING UP</span>
                            </button>
                            <button type="button" class="btn bg-blue waves-effect">
                                <i class="material-icons">verified_user</i>
                                <span>VERIFIED USER</span>
                            </button>
                            <button type="button" class="btn bg-light-blue waves-effect">
                                <i class="material-icons">mic</i>
                                <span>MIC</span>
                            </button>
                            <button type="button" class="btn bg-teal waves-effect">
                                <i class="material-icons">forum</i>
                                <span>FORUM</span>
                            </button>
                            <button type="button" class="btn bg-green waves-effect">
                                <i class="material-icons">email</i>
                                <span>EMAIL</span>
                            </button>
                            <button type="button" class="btn bg-light-green waves-effect">
                                <i class="material-icons">chat</i>
                                <span>CHAT</span>
                            </button>
                            <button type="button" class="btn bg-lime waves-effect">
                                <i class="material-icons">vpn_key</i>
                                <span>VPN KEY</span>
                            </button>
                            <button type="button" class="btn bg-amber waves-effect">
                                <i class="material-icons">drafts</i>
                                <span>DRAFTS</span>
                            </button>
                            <button type="button" class="btn bg-orange waves-effect">
                                <i class="material-icons">save</i>
                                <span>SAVE</span>
                            </button>
                            <button type="button" class="btn bg-deep-orange waves-effect">
                                <i class="material-icons">weekend</i>
                                <span>WEEKEND</span>
                            </button>
                            <button type="button" class="btn bg-brown waves-effect">
                                <i class="material-icons">access_alarm</i>
                                <span>ALARM</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Icon & Text Buttons -->
        <!-- Button Groups -->
        <div class="block-header">
            <h2>
                BUTTON GROUPS
                <small>Group a series of buttons together on a single line with the button group</small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC EXAMPLE
                            <small>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</small>
                        </h2>
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
                        <div class="demo-button-groups">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default waves-effect">LEFT</button>
                                <button type="button" class="btn btn-default waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-default waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect">LEFT</button>
                                <button type="button" class="btn btn-primary waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-primary waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success waves-effect">LEFT</button>
                                <button type="button" class="btn btn-success waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-success waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info waves-effect">LEFT</button>
                                <button type="button" class="btn btn-info waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-info waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning waves-effect">LEFT</button>
                                <button type="button" class="btn btn-warning waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-warning waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger waves-effect">LEFT</button>
                                <button type="button" class="btn btn-danger waves-effect">MIDDLE</button>
                                <button type="button" class="btn btn-danger waves-effect">RIGHT</button>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-button-groups">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-pink waves-effect waves-light">LEFT</button>
                                <button type="button" class="btn bg-pink waves-effect waves-light">MIDDLE</button>
                                <button type="button" class="btn bg-pink waves-effect waves-light">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-cyan waves-effect">LEFT</button>
                                <button type="button" class="btn bg-cyan waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-cyan waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-teal waves-effect">LEFT</button>
                                <button type="button" class="btn bg-teal waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-teal waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-orange waves-effect">LEFT</button>
                                <button type="button" class="btn bg-orange waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-orange waves-effect">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-purple waves-effect waves-light">LEFT</button>
                                <button type="button" class="btn bg-purple waves-effect waves-light">MIDDLE</button>
                                <button type="button" class="btn bg-purple waves-effect waves-light">RIGHT</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-blue-grey waves-effect">LEFT</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">MIDDLE</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">RIGHT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BUTTON TOOLBAR
                            <small>Combine sets of <code>&lt;div class=&quot;btn-group&quot;&gt;</code> into a <code>&lt;div class=&quot;btn-toolbar&quot;&gt;</code> for more complex components.</small>
                        </h2>
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
                        <div class="demo-button-toolbar clearfix">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-default waves-effect">1</button>
                                    <button type="button" class="btn btn-default waves-effect">2</button>
                                    <button type="button" class="btn btn-default waves-effect">3</button>
                                    <button type="button" class="btn btn-default waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-default waves-effect">5</button>
                                    <button type="button" class="btn btn-default waves-effect">6</button>
                                    <button type="button" class="btn btn-default waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-default waves-effect">8</button>
                                </div>
                            </div>

                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary waves-effect">1</button>
                                    <button type="button" class="btn btn-primary waves-effect">2</button>
                                    <button type="button" class="btn btn-primary waves-effect">3</button>
                                    <button type="button" class="btn btn-primary waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-primary waves-effect">5</button>
                                    <button type="button" class="btn btn-primary waves-effect">6</button>
                                    <button type="button" class="btn btn-primary waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-primary waves-effect">8</button>
                                </div>
                            </div>

                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-success waves-effect">1</button>
                                    <button type="button" class="btn btn-success waves-effect">2</button>
                                    <button type="button" class="btn btn-success waves-effect">3</button>
                                    <button type="button" class="btn btn-success waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-success waves-effect">5</button>
                                    <button type="button" class="btn btn-success waves-effect">6</button>
                                    <button type="button" class="btn btn-success waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-success waves-effect">8</button>
                                </div>
                            </div>

                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-info waves-effect">1</button>
                                    <button type="button" class="btn btn-info waves-effect">2</button>
                                    <button type="button" class="btn btn-info waves-effect">3</button>
                                    <button type="button" class="btn btn-info waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-info waves-effect">5</button>
                                    <button type="button" class="btn btn-info waves-effect">6</button>
                                    <button type="button" class="btn btn-info waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-info waves-effect">8</button>
                                </div>
                            </div>

                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-warning waves-effect">1</button>
                                    <button type="button" class="btn btn-warning waves-effect">2</button>
                                    <button type="button" class="btn btn-warning waves-effect">3</button>
                                    <button type="button" class="btn btn-warning waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-warning waves-effect">5</button>
                                    <button type="button" class="btn btn-warning waves-effect">6</button>
                                    <button type="button" class="btn btn-warning waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-warning waves-effect">8</button>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-button-toolbar clearfix">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-pink waves-effect">1</button>
                                    <button type="button" class="btn bg-pink waves-effect">2</button>
                                    <button type="button" class="btn bg-pink waves-effect">3</button>
                                    <button type="button" class="btn bg-pink waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-pink waves-effect">5</button>
                                    <button type="button" class="btn bg-pink waves-effect">6</button>
                                    <button type="button" class="btn bg-pink waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-pink waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-cyan waves-effect">1</button>
                                    <button type="button" class="btn bg-cyan waves-effect">2</button>
                                    <button type="button" class="btn bg-cyan waves-effect">3</button>
                                    <button type="button" class="btn bg-cyan waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-cyan waves-effect">5</button>
                                    <button type="button" class="btn bg-cyan waves-effect">6</button>
                                    <button type="button" class="btn bg-cyan waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-cyan waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-teal waves-effect">1</button>
                                    <button type="button" class="btn bg-teal waves-effect">2</button>
                                    <button type="button" class="btn bg-teal waves-effect">3</button>
                                    <button type="button" class="btn bg-teal waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-teal waves-effect">5</button>
                                    <button type="button" class="btn bg-teal waves-effect">6</button>
                                    <button type="button" class="btn bg-teal waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-teal waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-orange waves-effect">1</button>
                                    <button type="button" class="btn bg-orange waves-effect">2</button>
                                    <button type="button" class="btn bg-orange waves-effect">3</button>
                                    <button type="button" class="btn bg-orange waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-orange waves-effect">5</button>
                                    <button type="button" class="btn bg-orange waves-effect">6</button>
                                    <button type="button" class="btn bg-orange waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-orange waves-effect">8</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="First group">
                                    <button type="button" class="btn bg-purple waves-effect">1</button>
                                    <button type="button" class="btn bg-purple waves-effect">2</button>
                                    <button type="button" class="btn bg-purple waves-effect">3</button>
                                    <button type="button" class="btn bg-purple waves-effect">4</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <button type="button" class="btn bg-purple waves-effect">5</button>
                                    <button type="button" class="btn bg-purple waves-effect">6</button>
                                    <button type="button" class="btn bg-purple waves-effect">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn bg-purple waves-effect">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SIZING
                            <small>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.</small>
                        </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 align-center">
                                <p><b>Large Button Group</b></p>
                                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                                    <button type="button" class="btn bg-pink waves-effect">LEFT</button>
                                    <button type="button" class="btn bg-pink waves-effect">MIDDLE</button>
                                    <button type="button" class="btn bg-pink waves-effect">RIGHT</button>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 align-center">
                                <p><b>Default Button Group</b></p>
                                <div class="btn-group" role="group" aria-label="Default button group">
                                    <button type="button" class="btn bg-pink waves-effect">LEFT</button>
                                    <button type="button" class="btn bg-pink waves-effect">MIDDLE</button>
                                    <button type="button" class="btn bg-pink waves-effect">RIGHT</button>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 align-center">
                                <p><b>Small Button Group</b></p>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                    <button type="button" class="btn bg-pink waves-effect">LEFT</button>
                                    <button type="button" class="btn bg-pink waves-effect">MIDDLE</button>
                                    <button type="button" class="btn bg-pink waves-effect">RIGHT</button>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 align-center">
                                <p><b>Extra-Small Button Group</b></p>
                                <div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
                                    <button type="button" class="btn bg-pink waves-effect">LEFT</button>
                                    <button type="button" class="btn bg-pink waves-effect">MIDDLE</button>
                                    <button type="button" class="btn bg-pink waves-effect">RIGHT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            NESTING
                            <small>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</small>
                        </h2>
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
                        <div class="demo-button-nesting">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default waves-effect">1</button>
                                <button type="button" class="btn btn-default waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect">1</button>
                                <button type="button" class="btn btn-primary waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success waves-effect">1</button>
                                <button type="button" class="btn btn-success waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info waves-effect">1</button>
                                <button type="button" class="btn btn-info waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-info waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning waves-effect">1</button>
                                <button type="button" class="btn btn-warning waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger waves-effect">1</button>
                                <button type="button" class="btn btn-danger waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-danger waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-button-nesting">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-pink waves-effect">1</button>
                                <button type="button" class="btn bg-pink waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-pink waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-cyan waves-effect">1</button>
                                <button type="button" class="btn bg-cyan waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-cyan waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-teal waves-effect">1</button>
                                <button type="button" class="btn bg-teal waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-orange waves-effect">1</button>
                                <button type="button" class="btn bg-orange waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-orange waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-purple waves-effect">1</button>
                                <button type="button" class="btn bg-purple waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-purple waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn bg-blue-grey waves-effect">1</button>
                                <button type="button" class="btn bg-blue-grey waves-effect">2</button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn bg-blue-grey waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                        <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VERTICAL VARIATION
                            <small>Make a set of buttons appear vertically stacked rather than horizontally.</small>
                        </h2>
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
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn bg-pink waves-effect">Button</button>
                            <button type="button" class="btn bg-cyan waves-effect">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Dropdown <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn bg-orange waves-effect">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            JUSTIFIED BUTTON GROUPS
                            <small>Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.</small>
                        </h2>
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
                        <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                            <a href="javascript:void(0);" class="btn bg-pink waves-effect" role="button">LEFT</a>
                            <a href="javascript:void(0);" class="btn bg-pink waves-effect" role="button">MIDDLE</a>
                            <a href="javascript:void(0);" class="btn bg-pink waves-effect" role="button">RIGHT</a>
                        </div>

                        <div class="btn-group btn-group-justified m-t-25 m-b-15" role="group" aria-label="Justified button group with nested dropdown">
                            <a href="javascript:void(0);" class="btn bg-pink waves-effect" role="button">LEFT</a>
                            <a href="javascript:void(0);" class="btn bg-pink waves-effect" role="button">MIDDLE</a>
                            <div class="btn-group" role="group">
                                <a href="javascript:void(0);" class="btn bg-pink dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                  aria-expanded="false">Dropdown<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Groups -->
        <!-- Button Dropdowns -->
        <div class="block-header">
            <h2>
                BUTTON DROPDOWNS
                <small>Use any button to trigger a dropdown menu by placing it within a .btn-group and providing the proper menu markup.</small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SINGLE BUTTON DROPDOWNS
                            <small>Turn a button into a dropdown toggle with some basic markup changes.</small>
                        </h2>
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
                        <div class="demo-single-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    DEFAULT <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PRIMARY <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SUCCESS <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    INFO <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    WARNING <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-single-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn bg-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PINK <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-cyan dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CYAN <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-teal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    TEAL <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-orange dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ORANGE <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-purple dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PURPLE <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            SPLITE BUTTON DROPDOWNS
                            <small>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</small>
                        </h2>
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
                        <div class="demo-splite-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default waves-effect">DEFAULT</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary waves-effect">PRIMARY</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success waves-effect">SUCCESS</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info waves-effect">INFO</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning waves-effect">WARNING</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-splite-button-dropdowns">
                            <div class="btn-group">
                                <button type="button" class="btn bg-pink waves-effect">PINK</button>
                                <button type="button" class="btn bg-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-cyan waves-effect">CYAN</button>
                                <button type="button" class="btn bg-cyan dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-teal waves-effect">TEAL</button>
                                <button type="button" class="btn bg-teal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-orange waves-effect">ORANGE</button>
                                <button type="button" class="btn bg-orange dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn bg-purple waves-effect">PURPLE</button>
                                <button type="button" class="btn bg-purple dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Button Dropdowns -->
        <!-- Dropups -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DROPUP VARIATION
                            <small>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</small>
                        </h2>
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
                        <div class="demo-dropup">
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-default waves-effect">DEFAULT DROPUP</button>
                                <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-primary waves-effect">PRIMARY DROPUP</button>
                                <button type="button" class="btn btn-primary waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-success waves-effect">SUCCESS DROPUP</button>
                                <button type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-info waves-effect">INFO DROPUP</button>
                                <button type="button" class="btn btn-info waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-warning waves-effect">WARNING DROPUP</button>
                                <button type="button" class="btn btn-warning waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-danger waves-effect">DANGER DROPUP</button>
                                <button type="button" class="btn btn-danger waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <h2 class="card-inside-title">
                            With Material Design Colors
                            <small>You can use material design colors which examples are <code>.bg-pink</code> class</small>
                        </h2>
                        <div class="demo-dropup">
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-pink waves-effect">PINK DROPUP</button>
                                <button type="button" class="btn bg-pink waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-cyan waves-effect">CYAN DROPUP</button>
                                <button type="button" class="btn bg-cyan waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-teal waves-effect">TEAL DROPUP</button>
                                <button type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-orange waves-effect">ORANGE DROPUP</button>
                                <button type="button" class="btn bg-orange waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-purple waves-effect">PURPLE DROPUP</button>
                                <button type="button" class="btn bg-purple waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group dropup">
                                <button type="button" class="btn bg-blue-grey waves-effect waves-light">BLUE GREY DROPUP</button>
                                <button type="button" class="btn bg-blue-grey waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Dropups -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Bootstrap Notify Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

  <script type="text/javascript">
      $(function(){
        //** Do something here with JQuery **//
      });
  </script>
@endsection