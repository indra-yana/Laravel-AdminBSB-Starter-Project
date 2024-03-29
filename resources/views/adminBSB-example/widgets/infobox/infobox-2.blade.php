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
        <!-- Counter Examples -->
        <div class="block-header">
            <h2>
                COUNTER ANIMATION
                <small>Taken from <a href="https://github.com/mhuggins/jquery-countTo" target="_blank">github.com/mhuggins/jquery-countTo</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW ORDERS</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW MEMBERS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-purple">
                    <div class="icon">
                        <i class="material-icons">bookmark</i>
                    </div>
                    <div class="content">
                        <div class="text">BOOKMARKS</div>
                        <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-purple">
                    <div class="icon">
                        <i class="material-icons">favorite</i>
                    </div>
                    <div class="content">
                        <div class="text">LIKES</div>
                        <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Counter Examples -->
        <!-- Hover Zoom Effect -->
        <div class="block-header">
            <h2>HOVER ZOOM EFFECT</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="content">
                        <div class="text">MESSAGES</div>
                        <div class="number">15</div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">devices</i>
                    </div>
                    <div class="content">
                        <div class="text">CPU USAGE</div>
                        <div class="number">92%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-blue hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">access_alarm</i>
                    </div>
                    <div class="content">
                        <div class="text">ALARM</div>
                        <div class="number">07:00 AM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">gps_fixed</i>
                    </div>
                    <div class="content">
                        <div class="text">LOCATION</div>
                        <div class="number">Turkey</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Zoom Effect -->
        <!-- Hover Expand Effect -->
        <div class="block-header">
            <h2>HOVER EXPAND EFFECT</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">BOUNCE RATE</div>
                        <div class="number">62%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">flight_takeoff</i>
                    </div>
                    <div class="content">
                        <div class="text">FLIGHT</div>
                        <div class="number">02:59 PM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">battery_charging_full</i>
                    </div>
                    <div class="content">
                        <div class="text">BATTERY</div>
                        <div class="number">Charging</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-lime hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">brightness_low</i>
                    </div>
                    <div class="content">
                        <div class="text">BRIGHTNESS RATE</div>
                        <div class="number">40%</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Expand Effect -->
        <!-- Chart Samples -->
        <div class="block-header">
            <h2>CHART SAMPLES</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-yellow">
                    <div class="icon">
                        <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE TRAFFICS</div>
                        <div class="number">127 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-amber">
                    <div class="icon">
                        <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE IMPRESSIONS</div>
                        <div class="number">457 512</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange">
                    <div class="icon">
                        <div class="chart chart-pie">30, 35, 25, 8</div>
                    </div>
                    <div class="content">
                        <div class="text">USAGE</div>
                        <div class="number">98%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-orange">
                    <div class="icon">
                        <div class="chart chart-pie">30, 35, 25, 10</div>
                    </div>
                    <div class="content">
                        <div class="text">USAGE</div>
                        <div class="number">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-brown">
                    <div class="icon">
                        <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">DAILY SALES</div>
                        <div class="number">$12 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-grey">
                    <div class="icon">
                        <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL SALES</div>
                        <div class="number">$125 543</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue-grey">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                    </div>
                    <div class="content">
                        <div class="text">CURRENCY</div>
                        <div class="number">$1 063</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-black">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                    </div>
                    <div class="content">
                        <div class="text">CURRENCY</div>
                        <div class="number">$1 125</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Chart Samples -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Jquery CountTo Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/jquery-countto/jquery.countTo.js') }}"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

  <!-- Custom Js -->
  <script src="{{ asset('adminBSB-master/js/pages/widgets/infobox/infobox-2.js') }}"></script>

  <script type="text/javascript">
      $(function(){
      //** Do something here with JQuery **//
      });
  </script>
@endsection