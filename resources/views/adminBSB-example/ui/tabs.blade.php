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
            <h2>TABS</h2>
        </div>
        <!-- Example Tab -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXAMPLE TAB
                            <small>Add quick, dynamic tab functionality to transition through panes of local content</small>
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">HOME</a></li>
                            <li role="presentation"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                            <li role="presentation"><a href="#messages" data-toggle="tab">MESSAGES</a></li>
                            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example Tab -->
        <!-- Tabs With Only Icon Title -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABS WITH ONLY ICON TITLE
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">home</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">email</i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings_only_icon_title" data-toggle="tab">
                                    <i class="material-icons">settings</i>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_only_icon_title">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_only_icon_title">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages_only_icon_title">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings_only_icon_title">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Only Icon Title -->
        <!-- Tabs With Icon Title -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABS WITH ICON TITLE
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">home</i> HOME
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i> PROFILE
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">email</i> MESSAGES
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">settings</i> SETTINGS
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                <b>Message Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                <b>Settings Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Icon Title -->
        <!-- Tabs With Material Design Colors -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABS WITH MATERIAL DESIGN COLORS
                            <small>You can use Material Design Colors which examples are <b>.tab-col-red, .tab-col-pink</b> class.</small>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-pink" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_1" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_1" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_1" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_1" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-deep-orange" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_2" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_2" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_2" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_2" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-teal" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_3" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_3" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_3" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_3" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-orange" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_4" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_4" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_4" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_4" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-purple" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_5" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_5" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_5" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_5" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="nav nav-tabs tab-col-blue-grey" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home_md_col_6" data-toggle="tab">HOME</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile_md_col_6" data-toggle="tab">PROFILE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages_md_col_6" data-toggle="tab">MESSAGES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#settings_md_col_6" data-toggle="tab">SETTINGS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Material Design Colors -->
        <!-- Tabs With Custom Animations -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABS WITH CUSTOM ANIMATIONS
                            <small>You can use different animation class. We used Animation.css which link is <a href="https://daneden.github.io/animate.css/" target="_blank">https://daneden.github.io/animate.css/</a></small>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active"><a href="#home_animation_1" data-toggle="tab">HOME</a></li>
                                    <li role="presentation"><a href="#profile_animation_1" data-toggle="tab">PROFILE</a></li>
                                    <li role="presentation"><a href="#messages_animation_1" data-toggle="tab">MESSAGES</a></li>
                                    <li role="presentation"><a href="#settings_animation_1" data-toggle="tab">SETTINGS</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
                                        <b>Home Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                        <b>Profile Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="settings_animation_1">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active"><a href="#home_animation_2" data-toggle="tab">HOME</a></li>
                                    <li role="presentation"><a href="#profile_animation_2" data-toggle="tab">PROFILE</a></li>
                                    <li role="presentation"><a href="#messages_animation_2" data-toggle="tab">MESSAGES</a></li>
                                    <li role="presentation"><a href="#settings_animation_2" data-toggle="tab">SETTINGS</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home_animation_2">
                                        <b>Home Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile_animation_2">
                                        <b>Profile Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="messages_animation_2">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="settings_animation_2">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                            aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                            gubergren sadipscing mel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Custom Animations -->
    </div>
  </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function(){
        //** Do something here with JQuery **//
        });
    </script>
@endsection