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
            <h2>MEDIA OBJECT</h2>
        </div>
        <!-- Default Media -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DEFAULT MEDIA
                            <small>The default media displays a media object (images, video, audio) to the left or right of a content block.</small>
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
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:void(0);">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus.
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla
                                        vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                        in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Default Media -->
        <!-- Media Alignment -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MEDIA ALIGNMENT
                            <small>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</small>
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
                        <div class="bs-example" data-example-id="media-alignment">
                            <div class="media">
                                <div class="media-left">
                                    <a href="javascript:void(0);">
                                        <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Top aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                        in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="javascript:void(0);">
                                        <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Middle aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                        in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-bottom">
                                    <a href="javascript:void(0);">
                                        <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Bottom aligned media</h4>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                        in faucibus.
                                    </p>
                                    <p>
                                        Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Media Alignment -->
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