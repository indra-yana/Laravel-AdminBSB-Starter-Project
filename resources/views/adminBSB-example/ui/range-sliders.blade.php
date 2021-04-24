@extends('adminBSB-example.layouts.app_layout')

@extends('adminBSB-example.layouts.section_top_nav')
@extends('adminBSB-example.layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
  <!-- Add custom styles here -->

  <!-- Range Slider Css -->
  <link href="{{ asset('adminBSB-master/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" />
  <link href="{{ asset('adminBSB-master/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet" />
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RANGE SLIDERS</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXAMPLES
                            <small>Taken by Ion Range Slider which link is <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">ionden.com/a/plugins/ion.rangeSlider/en.html</a></small>
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
                        <div class="irs-demo">
                            <b>Start without params</b>
                            <input type="text" id="range_01" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Set min value, max value and start point</b>
                            <input type="text" id="range_02" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                            <input type="text" id="range_03" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Set up range with negative values</b>
                            <input type="text" id="range_04" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Using step 250</b>
                            <input type="text" id="range_05" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Set up range with fractional values, using fractional step</b>
                            <input type="text" id="range_06" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Set up you own numbers</b>
                            <input type="text" id="range_07" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>Using any strings as your values</b>
                            <input type="text" id="range_08" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>One more example with strings</b>
                            <input type="text" id="range_09" value="" />
                        </div>
                        <div class="irs-demo">
                            <b>No prettify. Big numbers are ugly and unreadable</b>
                            <input type="text" id="range_10" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('scripts')
  <!-- RangeSlider Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/ion-rangeslider/js/ion.rangeSlider.js') }}"></script>

  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
        //** Do something here with JQuery **//
        //Taken from http://ionden.com/a/plugins/ion.rangeSlider/demo.html

        $("#range_01").ionRangeSlider();

        $("#range_02").ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $("#range_03").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: "$"
        });

        $("#range_04").ionRangeSlider({
            type: "double",
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500
        });

        $("#range_05").ionRangeSlider({
            type: "double",
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });


        $("#range_06").ionRangeSlider({
            type: "double",
            grid: true,
            min: -12.8,
            max: 12.8,
            from: -3.2,
            to: 3.2,
            step: 0.1
        });

        $("#range_07").ionRangeSlider({
            type: "double",
            grid: true,
            from: 1,
            to: 5,
            values: [0, 10, 100, 1000, 10000, 100000, 1000000]
        });


        $("#range_08").ionRangeSlider({
            grid: true,
            from: 5,
            values: [
                "zero", "one",
                "two", "three",
                "four", "five",
                "six", "seven",
                "eight", "nine",
                "ten"
            ]
        });

        $("#range_09").ionRangeSlider({
            grid: true,
            from: 3,
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ]
        });

        $("#range_10").ionRangeSlider({
            grid: true,
            min: 1000,
            max: 1000000,
            from: 100000,
            step: 1000,
            prettify_enabled: false
        });
    });
  </script>
@endsection