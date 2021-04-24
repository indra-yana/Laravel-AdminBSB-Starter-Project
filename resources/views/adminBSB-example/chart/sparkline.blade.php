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
                SPARKLINE CHART
                <small>Taken from <a href="http://omnipotent.net/jquery.sparkline" target="_blank">omnipotent.net/jquery.sparkline</a></small>
            </h2>
        </div>
        <div class="row clearfix">
            <!-- Line Chart -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>LINE CHART</h2>
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
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="150px" data-line-Width="2" data-line-Color="rgb(0, 188, 212)"
                            data-fill-Color="rgba(0, 188, 212, 0.3)">
                            6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Line Chart -->
            <!-- Bar Chart -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>BAR CHART</h2>
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
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="150px" data-bar-Width="16" data-bar-Spacing="7" data-bar-Color="rgb(0, 188, 212)">
                            6,7,8,9,10,5,13,18,21,7,9,11,12,5
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bar Chart -->
            <!-- Pie Chart -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>PIE CHART</h2>
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
                    <div class="body align-center">
                        <div class="sparkline-pie">6,4,8</div>
                    </div>
                </div>
            </div>
            <!-- #END# Pie Chart -->
        </div>

        <!-- All Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>ALL EXAMPLES</h2>
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
                            <div class="col-sm-6">
                                <p>
                                    Mouse speed <span id="mousespeed">Loading..</span>
                                </p>

                                <p>
                                    Inline <span class="sparkline-1">10,8,9,3,5,8,5</span> line graphs
                                    <span class="sparkline-1">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                </p>

                                <p>
                                    Bar charts <span class="sparkbar">10,8,9,3,5,8,5</span> negative values:
                                    <span class="sparkbar">-3,1,2,0,3,-1</span> stacked: <span class="sparkbar">0:2,2:4,4:2,4:1</span>
                                </p>

                                <p>
                                    Composite inline
                                    <span id="compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                </p>

                                <p>
                                    Inline with normal range
                                    <span id="normalline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                </p>

                                <p>
                                    Composite bar
                                    <span id="compositebar">4,6,7,7,4,3,2,1,4</span>
                                </p>

                                <p>
                                    Discrete
                                    <span class="discrete1">4,6,7,7,4,3,2,1,4,4,5,6,7,6,6,2,4,5</span><br> Discrete with
                                    threshold
                                    <span id="discrete2">4,6,7,7,4,3,2,1,4</span>
                                </p>

                                <p>
                                    Bullet charts<br>
                                    <span class="sparkbullet">10,12,12,9,7</span><br>
                                    <span class="sparkbullet">14,12,12,9,7</span><br>
                                    <span class="sparkbullet">10,12,14,9,7</span><br>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                    Customize size and colours
                                    <span id="linecustom">10,8,9,3,5,8,5,7</span>
                                </p>

                                <p>
                                    Tristate charts
                                    <span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br> (think games won,
                                    lost or drawn)
                                </p>

                                <p>
                                    Tristate chart using a colour map:
                                    <span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
                                </p>

                                <p>
                                    Box Plot: <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br>                                        Pre-computed box plot <span class="sparkboxplotraw">Loading..</span>
                                </p>

                                <p>
                                    <span class="sparkpie">1,1,2</span>
                                    <span class="sparkpie">1,5</span>
                                    <span class="sparkpie">20,50,80</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# All Examples -->
    </div>
  </section>
@endsection

@section('scripts')
    <!-- Sparkline Plugin Js -->
    <script src="{{ asset('adminBSB-master/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script type="text/javascript">
      $(function(){
        //** Do something here with JQuery **//
        $(".sparkline").each(function () {
          var $this = $(this);
          $this.sparkline('html', $this.data());
        });

        $('.sparkline-pie').sparkline('html', {
            type: 'pie',
            offset: 90,
            width: '150px',
            height: '150px',
            sliceColors: ['#E91E63', '#00BCD4', '#FFC107']
        })

        drawDocSparklines();
        drawMouseSpeedDemo();
      });

      //Taken from http://omnipotent.net/jquery.sparkline ================
      function drawDocSparklines() {

        // Bar + line composite charts
        $('#compositebar').sparkline('html', { type: 'bar', barColor: '#aaf' });
        $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
            { composite: true, fillColor: false, lineColor: 'red' });


        // Line charts taking their values from the tag
        $('.sparkline-1').sparkline();

        // Larger line charts for the docs
        $('.largeline').sparkline('html',
            { type: 'line', height: '2.5em', width: '4em' });

        // Customized line chart
        $('#linecustom').sparkline('html',
            {
                height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
                minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
            });

        // Bar charts using inline values
        $('.sparkbar').sparkline('html', { type: 'bar' });

        $('.barformat').sparkline([1, 3, 5, 3, 8], {
            type: 'bar',
            tooltipValueLookups: {
                levels: $.range_map({ ':2': 'Low', '3:6': 'Medium', '7:': 'High' })
            }
        });

        // Tri-state charts using inline values
        $('.sparktristate').sparkline('html', { type: 'tristate' });
        $('.sparktristatecols').sparkline('html',
            { type: 'tristate', colorMap: { '-2': '#fa7', '2': '#44f' } });

        // Composite line charts, the second using values supplied via javascript
        $('#compositeline').sparkline('html', { fillColor: false, changeRangeMin: 0, chartRangeMax: 10 });
        $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
            { composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10 });

        // Line charts with normal range marker
        $('#normalline').sparkline('html',
            { fillColor: false, normalRangeMin: -1, normalRangeMax: 8 });
        $('#normalExample').sparkline('html',
            { fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4' });

        // Discrete charts
        $('.discrete1').sparkline('html',
            { type: 'discrete', lineColor: 'blue', xwidth: 18 });
        $('#discrete2').sparkline('html',
            { type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4 });

        // Bullet charts
        $('.sparkbullet').sparkline('html', { type: 'bullet' });

        // Pie charts
        $('.sparkpie').sparkline('html', { type: 'pie', height: '1.0em' });

        // Box plots
        $('.sparkboxplot').sparkline('html', { type: 'box' });
        $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
            { type: 'box', raw: true, showOutliers: true, target: 6 });

        // Box plot with specific field order
        $('.boxfieldorder').sparkline('html', {
            type: 'box',
            tooltipFormatFieldlist: ['med', 'lq', 'uq'],
            tooltipFormatFieldlistKey: 'field'
        });

        // click event demo sparkline
        $('.clickdemo').sparkline();
        $('.clickdemo').bind('sparklineClick', function (ev) {
            var sparkline = ev.sparklines[0],
                region = sparkline.getCurrentRegionFields();
            value = region.y;
            alert("Clicked on x=" + region.x + " y=" + region.y);
        });

        // mouseover event demo sparkline
        $('.mouseoverdemo').sparkline();
        $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
            var sparkline = ev.sparklines[0],
                region = sparkline.getCurrentRegionFields();
            value = region.y;
            $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
        }).bind('mouseleave', function () {
            $('.mouseoverregion').text('');
        });
      }

      /**
      ** Draw the little mouse speed animated graph
      ** This just attaches a handler to the mousemove event to see
      ** (roughly) how far the mouse has moved
      ** and then updates the display a couple of times a second via
      ** setTimeout()
      **/
      function drawMouseSpeedDemo() {
        var mrefreshinterval = 500; // update display every 500ms
        var lastmousex = -1;
        var lastmousey = -1;
        var lastmousetime;
        var mousetravel = 0;
        var mpoints = [];
        var mpoints_max = 30;
        $('html').mousemove(function (e) {
            var mousex = e.pageX;
            var mousey = e.pageY;
            if (lastmousex > -1) {
                mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
            }
            lastmousex = mousex;
            lastmousey = mousey;
        });
        var mdraw = function () {
            var md = new Date();
            var timenow = md.getTime();
            if (lastmousetime && lastmousetime != timenow) {
                var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                mpoints.push(pps);
                if (mpoints.length > mpoints_max)
                    mpoints.splice(0, 1);
                mousetravel = 0;
                $('#mousespeed').sparkline(mpoints, { width: mpoints.length * 2, tooltipSuffix: ' pixels per second' });
            }
            lastmousetime = timenow;
            setTimeout(mdraw, mrefreshinterval);
        };
          // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval);
      }

      //=================================================================
    </script>
@endsection