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
            <h2>
                LABELS
            </h2>
        </div>
        <!-- Labels -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LABELS
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
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                        <hr>
                        <h1>Example heading <span class="label label-danger">New</span></h1>
                        <h2>Example heading <span class="label label-warning">New</span></h2>
                        <h3>Example heading <span class="label label-info">New</span></h3>
                        <h4>Example heading <span class="label label-success">New</span></h4>
                        <h5>Example heading <span class="label label-primary">New</span></h5>
                        <h6>Example heading <span class="label label-default">New</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Labels -->
        <!-- Labels With Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LABELS WITH MATERIAL DESIGN COLORS
                            <small>You can use material design color which examples are <code>.bg-pink, bg-red</code> class</small>
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
                        <span class="label bg-red">Red</span>
                        <span class="label bg-pink">Pink</span>
                        <span class="label bg-purple">Purple</span>
                        <span class="label bg-deep-purple">Deep Purple</span>
                        <span class="label bg-indigo">Indigo</span>
                        <span class="label bg-blue">Blue</span>
                        <span class="label bg-light-blue">Light Blue</span>
                        <span class="label bg-cyan">Cyan</span>
                        <span class="label bg-teal">Teal</span>
                        <span class="label bg-green">Green</span>
                        <span class="label bg-light-green">Light Green</span>
                        <span class="label bg-lime">Lime</span>
                        <span class="label bg-yellow">Yellow</span>
                        <span class="label bg-amber">Amber</span>
                        <span class="label bg-orange">Orange</span>
                        <span class="label bg-deep-orange">Deep Orange</span>
                        <span class="label bg-brown">Brown</span>
                        <span class="label bg-grey">Grey</span>
                        <span class="label bg-blue-grey">Blue Grey</span>
                        <span class="label bg-black">Black</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Labels With Material Design Colors -->
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