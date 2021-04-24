@section('section_sidebar')
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('adminBSB-master/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ request()->routeIs('adminBSB.dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('adminBSB.dashboard.index') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('adminBSB.typography') ? 'active' : '' }}">
                    <a href="{{ route('adminBSB.typography') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Typography</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('adminBSB.helper-classes') ? 'active' : '' }}">
                    <a href="{{ route('adminBSB.helper-classes') }}">
                        <i class="material-icons">layers</i>
                        <span>Helper Classes</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('adminBSB.widgets.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.widgets.cards.*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{ request()->routeIs('adminBSB.widgets.cards.basic') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.cards.basic') }}">Basic</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.cards.colored') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.cards.colored') }}">Colored</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.cards.no-header') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.cards.no-header') }}">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('adminBSB.widgets.infobox.*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{ request()->routeIs('adminBSB.widgets.infobox.infobox-1') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.infobox.infobox-1') }}">Infobox-1</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.infobox.infobox-2') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.infobox.infobox-2') }}">Infobox-2</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.infobox.infobox-3') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.infobox.infobox-3') }}">Infobox-3</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.infobox.infobox-4') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.infobox.infobox-4') }}">Infobox-4</a>
                                </li>
                                <li class="{{ request()->routeIs('adminBSB.widgets.infobox.infobox-5') ? 'active' : '' }}">
                                    <a href="{{ route('adminBSB.widgets.infobox.infobox-5') }}">Infobox-5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.ui.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.ui.alerts') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.alerts') }}">Alerts</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.animations') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.animations') }}">Animations</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.badges') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.badges') }}">Badges</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.breadcrumbs') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.breadcrumbs') }}">Breadcrumbs</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.buttons') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.buttons') }}">Buttons</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.collapse') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.collapse') }}">Collapse</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.colors') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.colors') }}">Colors</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.dialogs') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.dialogs') }}">Dialogs</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.icons') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.icons') }}">Icons</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.labels') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.labels') }}">Labels</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.list-group') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.list-group') }}">List Group</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.media-object') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.media-object') }}">Media Object</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.modals') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.modals') }}">Modals</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.notifications') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.notifications') }}">Notifications</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.pagination') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.pagination') }}">Pagination</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.preloaders') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.preloaders') }}">Preloaders</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.progressbars') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.progressbars') }}">Progress Bars</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.range-sliders') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.range-sliders') }}">Range Sliders</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.sortable-nestable') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.sortable-nestable') }}">Sortable & Nestable</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.tabs') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.tabs') }}">Tabs</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.thumbnails') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.thumbnails') }}">Thumbnails</a>
                        </li>
                        
                        <li class="{{ request()->routeIs('adminBSB.ui.tooltips-popovers') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.tooltips-popovers') }}">Tooltips & Popovers</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.ui.waves') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.ui.waves') }}">Waves</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.forms.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.forms.basic-form-elements') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.basic-form-elements') }}">Basic Form Elements</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.forms.advanced-form-elements') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.advanced-form-elements') }}">Advanced Form Elements</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.forms.forms-examples') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.forms-examples') }}">Form Examples</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.forms.form-validation') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.form-validation') }}">Form Validation</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.forms.form-wizard') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.form-wizard') }}">Form Wizard</a>
                        </li>
                        
                        <li class="{{ request()->routeIs('adminBSB.forms.editors') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.forms.editors') }}">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.tables.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.tables.normal-table') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.tables.normal-table') }}">Normal Tables</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.tables.jquery-datatable') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.tables.jquery-datatable') }}">Jquery Datatables</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.tables.editable-table') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.tables.editable-table') }}">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.media.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.media.image-gallery') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.media.image-gallery') }}">Image Gallery</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.media.carousel') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.media.carousel') }}">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.chart.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.chart.morris') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.chart.morris') }}">Morris</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.chart.flot') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.chart.flot') }}">Flot</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.chart.chart-js') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.chart.chart-js') }}">ChartJS</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.chart.sparkline') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.chart.sparkline') }}">Sparkline</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.chart.jquery-knob') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.chart.jquery-knob') }}">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.example-pages.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.example-pages.profile') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.profile') }}">Profile</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.sign-in') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.sign-in') }}">Sign In</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.sign-up') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.sign-up') }}">Sign Up</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.forgot-password') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.forgot-password') }}">Forgot Password</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.blank-page') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.blank-page') }}">Blank Page</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.404') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.404') }}">404 - Not Found</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.example-pages.500') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.example-pages.500') }}">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('adminBSB.maps.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->routeIs('adminBSB.maps.google') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.maps.google') }}">Google Map</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.maps.yandex') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.maps.yandex') }}">YandexMap</a>
                        </li>

                        <li class="{{ request()->routeIs('adminBSB.maps.jvectormap') ? 'active' : '' }}">
                            <a href="{{ route('adminBSB.maps.jvectormap') }}">jVectorMap</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">update</i>
                        <span>Changelogs</span>
                    </a>
                </li> --}}
                
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
@endsection