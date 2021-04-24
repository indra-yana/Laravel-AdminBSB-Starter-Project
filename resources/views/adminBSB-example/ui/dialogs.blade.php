@extends('adminBSB-example.layouts.app_layout')

@extends('adminBSB-example.layouts.section_top_nav')
@extends('adminBSB-example.layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
  <!-- Add custom styles here -->

  <!-- Sweetalert Css -->
  <link href="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DIALOGS
                <small>Taken by <a href="https://github.com/t4t5/sweetalert" target="_blank">github.com/t4t5/sweetalert</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>EXAMPLES</h2>
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
                        <div class="row clearfix js-sweetalert">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A basic message</p>
                                <button class="btn btn-primary waves-effect" data-type="basic">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A title with a text under</p>
                                <button class="btn btn-primary waves-effect" data-type="with-title">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A success message!</p>
                                <button class="btn btn-primary waves-effect" data-type="success">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                                <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                                <button class="btn btn-primary waves-effect" data-type="cancel">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A message with a custom icon</p>
                                <button class="btn btn-primary waves-effect" data-type="with-custom-icon">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>An HTML message</p>
                                <button class="btn btn-primary waves-effect" data-type="html-message">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A message with auto close timer</p>
                                <button class="btn btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>A replacement for the <b>prompt</b> function</p>
                                <button class="btn btn-primary waves-effect" data-type="prompt">CLICK ME</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p>With a loader (for AJAX request for example)</p>
                                <button class="btn btn-primary waves-effect" data-type="ajax-loader">CLICK ME</button>
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
  <!-- Select Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

  <!-- Bootstrap Notify Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
  
  <!-- SweetAlert Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
        //** Do something here with JQuery **//
        $('.js-sweetalert button').on('click', function () {
            var type = $(this).data('type');
            if (type === 'basic') {
                showBasicMessage();
            }
            else if (type === 'with-title') {
                showWithTitleMessage();
            }
            else if (type === 'success') {
                showSuccessMessage();
            }
            else if (type === 'confirm') {
                showConfirmMessage();
            }
            else if (type === 'cancel') {
                showCancelMessage();
            }
            else if (type === 'with-custom-icon') {
                showWithCustomIconMessage();
            }
            else if (type === 'html-message') {
                showHtmlMessage();
            }
            else if (type === 'autoclose-timer') {
                showAutoCloseTimerMessage();
            }
            else if (type === 'prompt') {
                showPromptMessage();
            }
            else if (type === 'ajax-loader') {
                showAjaxLoaderMessage();
            }
        });
    });

    //These codes takes from http://t4t5.github.io/sweetalert/
    function showBasicMessage() {
        swal("Here's a message!");
    }

    function showWithTitleMessage() {
        swal("Here's a message!", "It's pretty, isn't it?");
    }

    function showSuccessMessage() {
        swal("Good job!", "You clicked the button!", "success");
    }

    function showConfirmMessage() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    }

    function showCancelMessage() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    }

    function showWithCustomIconMessage() {
        swal({
            title: "Sweet!",
            text: "Here's a custom image.",
            imageUrl: "../../images/thumbs-up.png"
        });
    }

    function showHtmlMessage() {
        swal({
            title: "HTML <small>Title</small>!",
            text: "A custom <span style=\"color: #CC0000\">html<span> message.",
            html: true
        });
    }

    function showAutoCloseTimerMessage() {
        swal({
            title: "Auto close alert!",
            text: "I will close in 2 seconds.",
            timer: 2000,
            showConfirmButton: false
        });
    }

    function showPromptMessage() {
        swal({
            title: "An input!",
            text: "Write something interesting:",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Write something"
        }, function (inputValue) {
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("You need to write something!"); return false
            }
            swal("Nice!", "You wrote: " + inputValue, "success");
        });
    }

    function showAjaxLoaderMessage() {
        swal({
            title: "Ajax request example",
            text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function () {
            setTimeout(function () {
                swal("Ajax request finished!");
            }, 2000);
        });
    }
  </script>
@endsection