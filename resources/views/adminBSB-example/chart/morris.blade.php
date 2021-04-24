@extends('adminBSB-example.layouts.app_layout')

@extends('adminBSB-example.layouts.section_top_nav')
@extends('adminBSB-example.layouts.section_sidebar')

@section('title', 'Welcome')

@section('styles')
  <!-- Add custom styles here -->

  <!-- Morris Css -->
  <link href="{{ asset('adminBSB-master/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
@endsection

@section('section_content')
  <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MORRIS
                <small>Taken from <a href="https://github.com/morrisjs/morris.js" target="_blank">github.com/morrisjs/morris.js</a></small>
            </h2>
        </div>
        <div class="row clearfix">
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                        <div id="line_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <!-- #END# Line Chart -->
            <!-- Bar Chart -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                        <div id="bar_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <!-- #END# Bar Chart -->
        </div>
        <div class="row clearfix">
            <!-- Area Chart -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>AREA CHART</h2>
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
                        <div id="area_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <!-- #END# Area Chart -->
            <!-- Donut Chart -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>DONUT CHART</h2>
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
                        <div id="donut_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <!-- #END# Donut Chart -->
        </div>
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Morris Plugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('adminBSB-master/plugins/morrisjs/morris.js') }}"></script>

  <!-- Custom Js -->
  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
      getMorris('line', 'line_chart');
      getMorris('bar', 'bar_chart');
      getMorris('area', 'area_chart');
      getMorris('donut', 'donut_chart');
    });

    function getMorris(type, element) {
      if (type === 'line') {
        Morris.Line({
            element: element,
            data: [{
                'period': '2011 Q3',
                'licensed': 3407,
                'sorned': 660
            }, {
                    'period': '2011 Q2',
                    'licensed': 3351,
                    'sorned': 629
                }, {
                    'period': '2011 Q1',
                    'licensed': 3269,
                    'sorned': 618
                }, {
                    'period': '2010 Q4',
                    'licensed': 3246,
                    'sorned': 661
                }, {
                    'period': '2009 Q4',
                    'licensed': 3171,
                    'sorned': 676
                }, {
                    'period': '2008 Q4',
                    'licensed': 3155,
                    'sorned': 681
                }, {
                    'period': '2007 Q4',
                    'licensed': 3226,
                    'sorned': 620
                }, {
                    'period': '2006 Q4',
                    'licensed': 3245,
                    'sorned': null
                }, {
                    'period': '2005 Q4',
                    'licensed': 3289,
                    'sorned': null
                }],
            xkey: 'period',
            ykeys: ['licensed', 'sorned'],
            labels: ['Licensed', 'Off the road'],
            lineColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)'],
            lineWidth: 3
        });
      } else if (type === 'bar') {
          Morris.Bar({
              element: element,
              data: [{
                  x: '2011 Q1',
                  y: 3,
                  z: 2,
                  a: 3
              }, {
                      x: '2011 Q2',
                      y: 2,
                      z: null,
                      a: 1
                  }, {
                      x: '2011 Q3',
                      y: 0,
                      z: 2,
                      a: 4
                  }, {
                      x: '2011 Q4',
                      y: 2,
                      z: 4,
                      a: 3
                  }],
              xkey: 'x',
              ykeys: ['y', 'z', 'a'],
              labels: ['Y', 'Z', 'A'],
              barColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(0, 150, 136)'],
          });
      } else if (type === 'area') {
          Morris.Area({
              element: element,
              data: [{
                  period: '2010 Q1',
                  iphone: 2666,
                  ipad: null,
                  itouch: 2647
              }, {
                      period: '2010 Q2',
                      iphone: 2778,
                      ipad: 2294,
                      itouch: 2441
                  }, {
                      period: '2010 Q3',
                      iphone: 4912,
                      ipad: 1969,
                      itouch: 2501
                  }, {
                      period: '2010 Q4',
                      iphone: 3767,
                      ipad: 3597,
                      itouch: 5689
                  }, {
                      period: '2011 Q1',
                      iphone: 6810,
                      ipad: 1914,
                      itouch: 2293
                  }, {
                      period: '2011 Q2',
                      iphone: 5670,
                      ipad: 4293,
                      itouch: 1881
                  }, {
                      period: '2011 Q3',
                      iphone: 4820,
                      ipad: 3795,
                      itouch: 1588
                  }, {
                      period: '2011 Q4',
                      iphone: 15073,
                      ipad: 5967,
                      itouch: 5175
                  }, {
                      period: '2012 Q1',
                      iphone: 10687,
                      ipad: 4460,
                      itouch: 2028
                  }, {
                      period: '2012 Q2',
                      iphone: 8432,
                      ipad: 5713,
                      itouch: 1791
                  }],
              xkey: 'period',
              ykeys: ['iphone', 'ipad', 'itouch'],
              labels: ['iPhone', 'iPad', 'iPod Touch'],
              pointSize: 2,
              hideHover: 'auto',
              lineColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(0, 150, 136)']
          });
      } else if (type === 'donut') {
          Morris.Donut({
              element: element,
              data: [{
                  label: 'Jam',
                  value: 25
              }, {
                      label: 'Frosted',
                      value: 40
                  }, {
                      label: 'Custard',
                      value: 25
                  }, {
                      label: 'Sugar',
                      value: 10
                  }],
              colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
              formatter: function (y) {
                  return y + '%'
              }
          });
      }
    }
  </script>
@endsection