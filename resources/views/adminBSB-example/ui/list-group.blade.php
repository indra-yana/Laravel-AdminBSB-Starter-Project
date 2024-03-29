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
            <h2>LIST GROUPS</h2>
        </div>
        <div class="row clearfix">
            <!-- Basic Examples -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC EXAMPLES
                            <small>The most basic list group is simply an unordered list with list items, and the proper classes.</small>
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
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Badges -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BADGES
                            <small>Add the badges component to any list group item and it will automatically be positioned on the right.</small>
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
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio <span class="badge bg-pink">14 new</span></li>
                            <li class="list-group-item">Dapibus ac facilisis in <span class="badge bg-cyan">99 read</span></li>
                            <li class="list-group-item">Morbi leo risus <span class="badge bg-teal">99+</span></li>
                            <li class="list-group-item">Porta ac consectetur ac <span class="badge bg-orange">21</span></li>
                            <li class="list-group-item">Vestibulum at eros <span class="badge bg-purple">18</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Badges -->
        </div>

        <div class="row clearfix">
            <!-- Linked Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LINKED ITEMS
                            <small>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</small>
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
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a>
                            <a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Linked Items -->
            <!-- Button Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BUTTON ITEMS
                            <small>List group items may be buttons instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element. Don't use the standard <code>.btn</code> classes here.</small>
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
                        <div class="list-group">
                            <button type="button" class="list-group-item">Cras justo odio</button>
                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Button Items -->
        </div>

        <!-- Disabled Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DISABLED ITEMS
                            <small>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</small>
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
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item disabled">
                                Cras justo odio
                            </a>
                            <a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a>
                            <a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Disabled Items -->

        <div class="row clearfix">
            <!-- Contextal Classes -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONTEXTUAL CLASSES
                            <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small>
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
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Contextal Classes -->
            <!-- Contextual Classes With Linked Items -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONTEXTUAL CLASSES WITH LINKED ITEMS
                            <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small>
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
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Contextual Classes With Linked Items -->
        </div>

        <div class="row clearfix">
            <!-- Colorful Items With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            COLORFUL ITEMS WITH MATERIAL DESIGN COLORS
                            <small>You can use material design colors which examples are <code>.list-group-bg-pink, .list-group-bg-cyan</code> class</small>
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
                        <ul class="list-group">
                            <li class="list-group-item list-group-bg-pink">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-bg-cyan">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-bg-teal">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-bg-orange">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Colorful Items With Material Design Colors -->
            <!-- Custom Content -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CUSTOM CONTENT
                            <small>Add nearly any HTML within, even for linked list groups like the one below.</small>
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
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-bg-pink">Dapibus ac facilisis in</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-bg-cyan">Cras sit amet nibh libero</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-bg-teal">Porta ac consectetur ac</a>
                            <a href="javascript:void(0);" class="list-group-item list-group-bg-orange">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
        </div>

        <!-- Contextual Classes With Linked Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONTEXTUAL CLASSES WITH LINKED ITEMS
                            <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small>
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
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item active">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Contextual Classes With Linked Items -->
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