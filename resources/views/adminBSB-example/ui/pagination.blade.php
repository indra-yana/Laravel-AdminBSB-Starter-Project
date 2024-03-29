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
            <h2>PAGINATION</h2>
        </div>
        <!-- Default Pagination -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DEFAULT PAGINATION
                            <small>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</small>
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
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="material-icons">chevron_left</i>
                                    </a>
                                </li>
                                <li><a href="javascript:void(0);" class="waves-effect">1</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">2</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">3</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">4</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">5</a></li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="material-icons">chevron_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            DISABLED AND ACTIVE STATES
                            <small>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</small>
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
                        <nav>
                            <ul class="pagination">
                                <li class="disabled">
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">chevron_left</i>
                                    </a>
                                </li>
                                <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">2</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">3</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">4</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">5</a></li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="material-icons">chevron_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            SIZING
                            <small>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</small>
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
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <b>Large</b>
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_left</i>
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="waves-effect">1</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">2</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">3</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">4</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">5</a></li>
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <b>Default</b>
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_left</i>
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="waves-effect">1</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">2</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">3</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">4</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">5</a></li>
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <b>Small</b>
                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_left</i>
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="waves-effect">1</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">2</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">3</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">4</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect">5</a></li>
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="material-icons">chevron_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Default Pagination -->
        <div class="block-header">
            <h2>PAGER</h2>
        </div>
        <!-- Default Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DEFAULT EXAMPLE
                            <small>By default, the pager centers links.</small>
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
                        <nav>
                            <ul class="pager">
                                <li><a href="javascript:void(0);" class="waves-effect">Previous</a></li>
                                <li><a href="javascript:void(0);" class="waves-effect">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Default Example -->
    <!-- Align Links -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ALIGNED LINKS
                        <small>Alternatively, you can align each link to the sides:</small>
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
                    <nav>
                        <ul class="pager">
                            <li class="previous">
                                <a href="javascript:void(0);" class="waves-effect"><span aria-hidden="true">&larr;</span> Older</a>
                            </li>
                            <li class="next">
                                <a href="javascript:void(0);" class="waves-effect">Newer <span aria-hidden="true">&rarr;</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Align Links -->
    <!-- Optional Disabled State -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        OPTIONAL DISABLED STATE
                        <small>Pager links also use the general <code>.disabled</code> utility class from the pagination.</small>
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
                    <nav>
                        <ul class="pager">
                            <li class="previous disabled">
                                <a href="javascript:void(0);">
                                    <span aria-hidden="true">&larr;</span> Older
                                </a>
                            </li>
                            <li class="next">
                                <a href="javascript:void(0);" class="waves-effect">
                                    Newer
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Optional Disabled State -->
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