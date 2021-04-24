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
                NOTIFICATIONS
                <small>Taken by Bootstrap Notification <a href="https://github.com/mouse0270/bootstrap-notify" target="_blank">github.com/mouse0270/bootstrap-notify</a></small>
            </h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            NOTIFICATION POSITIONS
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
                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    TOP LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    TOP CENTER
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    TOP RIGHT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    BOTTOM LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    BOTTOM CENTER
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    BOTTOM RIGHT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification Types -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            NOTIFICATION TYPES
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
                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="alert-danger">
                                    DANGER
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="alert-success">
                                    SUCCESS
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-warning btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="alert-warning">
                                    WARNING
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn btn-info btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="alert-info">
                                    INFO
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Notification Types -->
        <!-- With Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            WITH MATERIAL DESIGN COLORS
                            <small>You can use the material design colors which example class are <code>.bg-pink, .bg-green</code></small>
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
                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-red btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-red">
                                    RED
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-green">
                                    GREEN
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-orange">
                                    ORANGE
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-blue btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-blue">
                                    BLUE
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-teal">
                                    TEAL
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-cyan">
                                    CYAN
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-pink">
                                    PINK
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-purple btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-purple">
                                    PURPLE
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-blue-grey btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-blue-grey">
                                    BLUE GREY
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-deep-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-deep-orange">
                                    DEEP ORANGE
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-light-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-light-green">
                                    LIGHT GREEN
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-black btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                                    BLACK
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# With Material Design Colors -->
        <!-- Notification Animations -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            NOTIFICATION ANIMATIONS
                            <small>You can use <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> class for animating.</small>
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
                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeIn"
                                        data-animate-exit="animated fadeOut" data-color-name="bg-black">
                                    FADE IN/OUT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInLeft"
                                        data-animate-exit="animated fadeOutLeft" data-color-name="bg-black">
                                    FADE IN/OUT LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated fadeInRight"
                                        data-animate-exit="animated fadeOutRight" data-color-name="bg-black">
                                    FADE IN/OUT RIGHT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInUp"
                                        data-animate-exit="animated fadeOutUp" data-color-name="bg-black">
                                    FADE IN/OUT UP
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInDown"
                                        data-animate-exit="animated fadeOutDown" data-color-name="bg-black">
                                    FADE IN/OUT DOWN
                                </button>
                            </div>
                        </div>

                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceIn"
                                        data-animate-exit="animated bounceOut" data-color-name="bg-black">
                                    BOUNCE IN/OUT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInLeft"
                                        data-animate-exit="animated bounceOutLeft" data-color-name="bg-black">
                                    BOUNCE IN/OUT LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated bounceInRight"
                                        data-animate-exit="animated bounceOutRight" data-color-name="bg-black">
                                    BOUNCE IN/OUT RIGHT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInUp"
                                        data-animate-exit="animated bounceOutUp" data-color-name="bg-black">
                                    BOUNCE IN/OUT UP
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInDown"
                                        data-animate-exit="animated bounceOutDown" data-color-name="bg-black">
                                    BOUNCE IN/OUT DOWN
                                </button>
                            </div>
                        </div>

                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateIn"
                                        data-animate-exit="animated rotateOut" data-color-name="bg-black">
                                    ROTATE IN/OUT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInUpLeft"
                                        data-animate-exit="animated rotateOutUpLeft" data-color-name="bg-black">
                                    ROTATE IN/OUT UP LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInUpRight"
                                        data-animate-exit="animated rotateOutUpRight" data-color-name="bg-black">
                                    ROTATE IN/OUT UP RIGHT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInDownLeft"
                                        data-animate-exit="animated rotateOutDownLeft" data-color-name="bg-black">
                                    ROTATE IN/OUT DOWN LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInDownRight"
                                        data-animate-exit="animated rotateOutDownRight" data-color-name="bg-black">
                                    ROTATE IN/OUT DOWN RIGHT
                                </button>
                            </div>
                        </div>

                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated zoomIn" data-animate-exit="animated zoomOut" data-color-name="bg-black">
                                    ZOOM IN/OUT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated zoomInLeft" data-animate-exit="animated zoomOutLeft" data-color-name="bg-black">
                                    ZOOM IN/OUT LEFT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                        data-animate-enter="animated zoomInRight" data-animate-exit="animated zoomOutRight" data-color-name="bg-black">
                                    ZOOM IN/OUT RIGHT
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated zoomInUp" data-animate-exit="animated zoomOutUp" data-color-name="bg-black">
                                    ZOOM IN/OUT UP
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated zoomInDown" data-animate-exit="animated zoomOutDown" data-color-name="bg-black">
                                    ZOOM IN/OUT DOWN
                                </button>
                            </div>
                        </div>

                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated flipInX" data-animate-exit="animated flipOutX" data-color-name="bg-black">
                                    FLIP IN/OUT X
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                        data-animate-enter="animated flipInY" data-animate-exit="animated flipOutY" data-color-name="bg-black">
                                    FLIP IN/OUT Y
                                </button>
                            </div>
                        </div>

                        <div class="row clearfix jsdemo-notification-button">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                                <button type="button" class="btn bg-indigo btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                        data-animate-enter="animated lightSpeedIn" data-animate-exit="animated lightSpeedOut"
                                        data-color-name="bg-black">
                                    LIGHT SPEED IN/OUT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Notification Animations -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Bootstrap Notify Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
        //** Do something here with JQuery **//
        $('.jsdemo-notification-button button').on('click', function () {
            var placementFrom = $(this).data('placement-from');
            var placementAlign = $(this).data('placement-align');
            var animateEnter = $(this).data('animate-enter');
            var animateExit = $(this).data('animate-exit');
            var colorName = $(this).data('color-name');

            showNotification(colorName, null, placementFrom, placementAlign, animateEnter, animateExit);
        });
    });

    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
        if (colorName === null || colorName === '') { colorName = 'bg-black'; }
        if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
        if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
        if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
        var allowDismiss = true;

        $.notify({
            message: text
        },
            {
                type: colorName,
                allow_dismiss: allowDismiss,
                newest_on_top: true,
                timer: 1000,
                placement: {
                    from: placementFrom,
                    align: placementAlign
                },
                animate: {
                    enter: animateEnter,
                    exit: animateExit
                },
                template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
            });
    }
  </script>
@endsection