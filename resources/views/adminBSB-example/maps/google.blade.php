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
        <!-- Google Maps -->
        <div class="block-header">
            <h2>
                GOOGLE MAPS
                <small>Taken from <a href="https://developers.google.com/maps/" target="_blank">developers.google.com/maps</a> & <a href="https://hpneo.github.io/gmaps/" target="_blank">hpneo.github.io/gmaps</a></small>
            </h2>
        </div>
        <div class="alert alert-warning">
            You need to get <b>Google Map API Key</b> for display maps with <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" class="alert-link" target="_blank">this link</a> (Also you can find documentation on same page).
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BASIC EXAMPLE
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
                        <div id="gmap_basic_example" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example -->
        <!-- Markers -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MARKERS
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
                        <div id="gmap_markers" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Markers -->
        <!-- Static Maps -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            STATIC MAPS
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
                        <div id="gmap_static_map" class="gmap"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            STATIC MAPS - WITH MARKERS
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
                        <div id="gmap_static_map_with_markers" class="gmap"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            STATIC MAPS - WITH POLYLINE
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
                        <div id="gmap_static_map_polyline" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Static Maps -->
        <!-- Panorama (Street View) -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            PANORAMA (STREET VIEW)
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
                        <div id="gmap_panorama" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Panorama (Street View) -->
    </div>
  </section>
@endsection

@section('scripts')
  <!-- Google Maps API Js -->
  {{-- <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script>AIzaSyCgX7jIlS-iKG-3pbeINQYtnhEyHCom9Ro --}}
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgX7jIlS-iKG-3pbeINQYtnhEyHCom9Ro&callback=initMap"></script>

  <!-- GMaps PLugin Js -->
  <script src="{{ asset('adminBSB-master/plugins/gmaps/gmaps.js') }}"></script>

  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
      //Basic Map
      var basicMap = new GMaps({
          el: '#gmap_basic_example',
          lat: -12.043333,
          lng: -77.028333
      });

      //Markers
      var markers = new GMaps({
          div: '#gmap_markers',
          lat: -12.043333,
          lng: -77.028333
      });
      markers.addMarker({
          lat: -12.043333,
          lng: -77.03,
          title: 'Lima',
          details: {
              database_id: 42,
              author: 'HPNeo'
          },
          click: function (e) {
              if (console.log)
                  console.log(e);
              alert('You clicked in this marker');
          }
      });
      markers.addMarker({
          lat: -12.042,
          lng: -77.028333,
          title: 'Marker with InfoWindow',
          infoWindow: {
              content: '<p>HTML Content</p>'
          }
      });

      //Static maps
      var staticMap = GMaps.staticMapURL({
          size: [$('#gmap_static_map').width(), 400],
          lat: -12.043333,
          lng: -77.028333
      });

      $('<img/>').attr('src', staticMap).appendTo('#gmap_static_map');

      //Static maps with markers
      var staticMapWithMarkers = GMaps.staticMapURL({
          size: [$('#gmap_static_map_with_markers').width(), 400],
          lat: -12.043333,
          lng: -77.028333,
          markers: [
              { lat: -12.043333, lng: -77.028333 },
              {
                  lat: -12.045333, lng: -77.034,
                  size: 'small'
              },
              {
                  lat: -12.045633, lng: -77.022,
                  color: 'blue'
              }
          ]
      });

      $('<img/>').attr('src', staticMapWithMarkers).appendTo('#gmap_static_map_with_markers');

      //Static maps with polyline
      var path = [
          [-12.040397656836609, -77.03373871559225],
          [-12.040248585302038, -77.03993927003302],
          [-12.050047116528843, -77.02448169303511],
          [-12.044804866577001, -77.02154422636042],
          [-12.040397656836609, -77.03373871559225],
      ];

      var staticMapPolyline = GMaps.staticMapURL({
          size: [$('#gmap_static_map_polyline').width(), 400],
          lat: -12.043333,
          lng: -77.028333,

          polyline: {
              path: path,
              strokeColor: '#131540',
              strokeOpacity: 0.6,
              strokeWeight: 6
              // fillColor: '#ffaf2ecc'
          }
      });

      $('<img/>').attr('src', staticMapPolyline).appendTo('#gmap_static_map_polyline');

      //Panorama
      var panorama = GMaps.createPanorama({
          el: '#gmap_panorama',
          lat: 42.3455,
          lng: -71.0983
      });
    });
  </script>
@endsection