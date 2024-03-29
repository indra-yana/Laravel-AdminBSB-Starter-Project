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
            <h2>COLORS</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MATERIAL DESIGN COLORS
                            <small>
                                Taken by Google's Material Design Color page which link is
                                <a href="https://material.google.com/style/color.html#color-color-palette" target="_blank" title="Google's Material Design Color">material.google.com/style/color.html#color-color-palette</a>
                            </small>
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
                        <div class="clearfix row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-red">
                                    <div class="color-name">RED</div>
                                    <div class="color-code">#F44336</div>
                                    <div class="color-class-name">bg-red</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-pink">
                                    <div class="color-name">PINK</div>
                                    <div class="color-code">#E91E63</div>
                                    <div class="color-class-name">bg-pink</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-purple">
                                    <div class="color-name">PURPLE</div>
                                    <div class="color-code">#9C27B0</div>
                                    <div class="color-class-name">bg-purple</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-deep-purple">
                                    <div class="color-name">DEEP PURPLE</div>
                                    <div class="color-code">#673AB7</div>
                                    <div class="color-class-name">bg-deep-purple</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-indigo">
                                    <div class="color-name">INDIGO</div>
                                    <div class="color-code">#3F51B5</div>
                                    <div class="color-class-name">bg-indigo</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-blue">
                                    <div class="color-name">BLUE</div>
                                    <div class="color-code">#2196F3</div>
                                    <div class="color-class-name">bg-blue</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-light-blue">
                                    <div class="color-name">LIGHT BLUE</div>
                                    <div class="color-code">#03A9F4</div>
                                    <div class="color-class-name">bg-light-blue</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-cyan">
                                    <div class="color-name">CYAN</div>
                                    <div class="color-code">#00BCD4</div>
                                    <div class="color-class-name">bg-cyan</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-teal">
                                    <div class="color-name">TEAL</div>
                                    <div class="color-code">#009688</div>
                                    <div class="color-class-name">bg-teal</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-green">
                                    <div class="color-name">GREEN</div>
                                    <div class="color-code">#4CAF50</div>
                                    <div class="color-class-name">bg-green</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-light-green">
                                    <div class="color-name">LIGHT GREEN</div>
                                    <div class="color-code">#8BC34A</div>
                                    <div class="color-class-name">bg-light-green</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-lime">
                                    <div class="color-name">LIME</div>
                                    <div class="color-code">#CDDC39</div>
                                    <div class="color-class-name">bg-lime</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-yellow">
                                    <div class="color-name">YELLOW</div>
                                    <div class="color-code">#FFEB3B</div>
                                    <div class="color-class-name">bg-yellow</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-amber">
                                    <div class="color-name">AMBER</div>
                                    <div class="color-code">#FFC107</div>
                                    <div class="color-class-name">bg-amber</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-orange">
                                    <div class="color-name">ORANGE</div>
                                    <div class="color-code">#FF9800</div>
                                    <div class="color-class-name">bg-orange</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-deep-orange">
                                    <div class="color-name">DEEP ORANGE</div>
                                    <div class="color-code">#FF5722</div>
                                    <div class="color-class-name">bg-deep-orange</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-brown">
                                    <div class="color-name">BROWN</div>
                                    <div class="color-code">#795548</div>
                                    <div class="color-class-name">bg-brown</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-grey">
                                    <div class="color-name">GREY</div>
                                    <div class="color-code">#9E9E9E</div>
                                    <div class="color-class-name">bg-grey</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-blue-grey">
                                    <div class="color-name">BLUE GREY</div>
                                    <div class="color-code">#607D8B</div>
                                    <div class="color-class-name">bg-blue-grey</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="demo-color-box bg-black">
                                    <div class="color-name">BLACK</div>
                                    <div class="color-code">#000000</div>
                                    <div class="color-class-name">bg-black</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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