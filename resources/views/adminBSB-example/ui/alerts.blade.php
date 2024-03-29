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
            <h2>ALERTS</h2>
        </div>

        <!-- Basic Alerts -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC ALERTS
                            <small>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</small>
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
                        <div class="alert alert-success">
                            <strong>Well done!</strong> You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info">
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Alerts -->
        <!-- Material Design Alerts -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MATERIAL DESIGN ALERTS
                            <small>You can use material design color with <code>.bg-red, .bg-pink</code> class</small>
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
                        <div class="alert bg-pink">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-orange">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-teal">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-green">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-red">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Material Design Alerts -->
        <!-- Dismissible Alerts -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DISMISSIBLE ALERTS
                            <small>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button.</small>
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
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-pink alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-teal alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                        <div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Dismissible Alerts -->
        <!-- Links In Alerts -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LINKS IN ALERTS
                            <small>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</small>
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
                        <div class="alert alert-success">
                            <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message</a>.
                        </div>
                        <div class="alert alert-info">
                            <strong>Heads up!</strong> This <a href="javascript:void(0);" class="alert-link">alert needs your attention</a>, but it's not super important.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good</a>.
                        </div>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">Change a few things up</a> and try submitting again.
                        </div>
                        <div class="alert bg-pink">
                            Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                            <a href="javascript:void(0);" class="alert-link">alert link</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Links In Alerts -->
    </div>
  </section>
@endsection

@section('scripts')
    <!-- Custom Js -->
    <script type="text/javascript">
        $(function(){
            //** Do something here with JQuery **//
        });
    </script>
@endsection