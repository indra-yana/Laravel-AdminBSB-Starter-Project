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
                <div class="info-box-4">
                    <div class="icon">
                        <i class="material-icons col-red">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW ORDERS</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <i class="material-icons col-indigo">face</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW MEMBERS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <i class="material-icons col-purple">bookmark</i>
                    </div>
                    <div class="content">
                        <div class="text">BOOKMARKS</div>
                        <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <i class="material-icons col-deep-purple">favorite</i>
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
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-pink">email</i>
                    </div>
                    <div class="content">
                        <div class="text">MESSAGES</div>
                        <div class="number">15</div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-blue">devices</i>
                    </div>
                    <div class="content">
                        <div class="text">CPU USAGE</div>
                        <div class="number">92%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-light-blue">access_alarm</i>
                    </div>
                    <div class="content">
                        <div class="text">ALARM</div>
                        <div class="number">07:00 AM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-cyan">gps_fixed</i>
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
                <div class="info-box-4 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons col-teal">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">BOUNCE RATE</div>
                        <div class="number">62%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons col-green">flight_takeoff</i>
                    </div>
                    <div class="content">
                        <div class="text">FLIGHT</div>
                        <div class="number">02:59 PM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons col-light-green">battery_charging_full</i>
                    </div>
                    <div class="content">
                        <div class="text">BATTERY</div>
                        <div class="number">Charging</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons col-lime">brightness_low</i>
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
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-bar" data-chartcolor="yellow">6,8,6,8,10</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE TRAFFICS</div>
                        <div class="number">127 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-bar" data-chartcolor="amber">6,8,6,8,10</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE IMPRESSIONS</div>
                        <div class="number">457 512</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-pie" data-chartcolor="orange">30, 35, 25, 8</div>
                    </div>
                    <div class="content">
                        <div class="text">USAGE</div>
                        <div class="number">98%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-pie" data-chartcolor="deepOrange">30, 35, 25, 10</div>
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
                <div class="info-box-4">
                    <div class="icon">
                        <span class="chart chart-line" data-chartcolor="brown">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">DAILY SALES</div>
                        <div class="number">$12 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <span class="chart chart-line" data-chartcolor="grey">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL SALES</div>
                        <div class="number">$125 543</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-bar" data-chartcolor="blueGrey">4,6,-3,-1,2,-2,4,6</div>
                    </div>
                    <div class="content">
                        <div class="text">CURRENCY</div>
                        <div class="number">$1 063</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="icon">
                        <div class="chart chart-bar" data-chartcolor="black">4,6,-3,-1,2,-2,4,6</div>
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
  <script src="{{ asset('adminBSB-master/js/helpers.js') }}"></script>
  <script src="{{ asset('adminBSB-master/js/pages/widgets/infobox/infobox-5.js') }}"></script>

  <script type="text/javascript">
      $(function(){
      //** Do something here with JQuery **//
      });
  </script>
@endsection