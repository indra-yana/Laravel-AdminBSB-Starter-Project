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
            <h2>BREADCRUMBS</h2>
        </div>
        <div class="row clearfix">
            <!-- Basic Examples -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC EXAMPLES
                            <small>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</small>
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
                        <ol class="breadcrumb">
                            <li class="active">Home</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="active">Library</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- With Icons -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            WITH ICONS
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
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="material-icons">home</i> Home
                            </li>
                        </ol>
                        <ol class="breadcrumb">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">home</i> Home
                                </a>
                            </li>
                            <li class="active">
                                <i class="material-icons">library_books</i> Library
                            </li>
                        </ol>
                        <ol class="breadcrumb">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">home</i> Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">library_books</i> Library
                                </a>
                            </li>
                            <li class="active">
                                <i class="material-icons">archive</i> Data
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# With Icons -->
        </div>

        <div class="row clearfix">
            <!-- With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            WITH MATERIAL DESIGN COLORS
                            <small>You can use material design colors which examples are <code>.breadcrumb-col-pink, .breadcrumb-col-teal</code>.</small>
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
                        <ol class="breadcrumb breadcrumb-col-pink">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="active">Library</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-teal">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li><a href="javascript:void(0);">Data</a></li>
                            <li class="active">File</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-orange">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li><a href="javascript:void(0);">Data</a></li>
                            <li><a href="javascript:void(0);">File</a></li>
                            <li class="active">Extensions</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# With Material Design Colors -->
            <!-- With Icons & Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            WITH ICONS & MATERIAL DESIGN COLORS
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
                        <ol class="breadcrumb breadcrumb-col-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active"><i class="material-icons">library_books</i> Library</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-cyan">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li class="active"><i class="material-icons">archive</i> Data</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-teal">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                            <li class="active"><i class="material-icons">attachment</i> File</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-col-orange">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">attachment</i> File</a></li>
                            <li class="active"><i class="material-icons">extension</i> Extensions</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# With Icons & Material Design Colors -->
        </div>

        <div class="row clearfix">
            <!-- Background With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BACKGROUND WITH MATERIAL DESIGN COLORS
                            <small>You can use material design colors which examples are <code>.breadcrumb-bg-pink, .breadcrumb-bg-teal</code>.</small>
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
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="active">Library</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-cyan">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-teal">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li><a href="javascript:void(0);">Data</a></li>
                            <li class="active">File</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-orange">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li><a href="javascript:void(0);">Data</a></li>
                            <li><a href="javascript:void(0);">File</a></li>
                            <li class="active">Extensions</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# Background With Material Design Colors -->
            <!-- Background With Icons & Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BACKGROUND WITH ICONS & MATERIAL DESIGN COLORS
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
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active"><i class="material-icons">library_books</i> Library</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-cyan">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li class="active"><i class="material-icons">archive</i> Data</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-teal">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                            <li class="active"><i class="material-icons">attachment</i> File</li>
                        </ol>
                        <ol class="breadcrumb breadcrumb-bg-orange">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">attachment</i> File</a></li>
                            <li class="active"><i class="material-icons">extension</i> Extensions</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- #END# Background With Icons & Material Design Colors -->
        </div>
        <!-- Alignments -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALIGNMENTS
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
                        <div class="font-bold">Align Left</div>
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active"><i class="material-icons">library_books</i> Library</li>
                        </ol>

                        <div class="align-center m-t-15 font-bold">Align Center</div>
                        <ol class="breadcrumb breadcrumb-bg-cyan align-center">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li class="active"><i class="material-icons">archive</i> Data</li>
                        </ol>

                        <div class="align-right m-t-15 font-bold">Align Right</div>
                        <ol class="breadcrumb breadcrumb-bg-teal align-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                            <li class="active"><i class="material-icons">attachment</i> File</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Alignments -->
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