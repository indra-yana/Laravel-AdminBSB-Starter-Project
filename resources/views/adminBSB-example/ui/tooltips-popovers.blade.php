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
        <!-- Tooltips -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TOOLTIPS
                            <small>Hover over the buttons below to see tooltips:</small>
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
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-toggle="tooltip" data-placement="right" title="Tooltip on right">TOOLTIP ON RIGHT</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-toggle="tooltip" data-placement="top" title="Tooltip on top">TOOLTIP ON TOP</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">TOOLTIP ON BOTTOM</button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-toggle="tooltip" data-placement="left" title="Tooltip on left">TOOLTIP ON LEFT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tooltips -->
        <!-- Popovers -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            POPOVERS
                            <small>Add small overlays of content, like those on the iPad, to any element for housing secondary information. Click over the buttons below to see popovers:</small>
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
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-trigger="focus" data-container="body" data-toggle="popover"
                                        data-placement="right" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    POPOVER ON RIGHT
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-trigger="focus" data-container="body" data-toggle="popover"
                                        data-placement="top" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    POPOVER ON TOP
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-trigger="focus" data-container="body" data-toggle="popover"
                                        data-placement="bottom" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    POPOVER ON BOTTOM
                                </button>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-trigger="focus" data-container="body" data-toggle="popover"
                                        data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    POPOVER ON LEFT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Popovers -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
        //** Do something here with JQuery **//
        //Tooltip
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });

        //Popover
        $('[data-toggle="popover"]').popover();
    });
  </script>
@endsection