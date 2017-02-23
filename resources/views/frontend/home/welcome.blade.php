@extends('layouts.app')

@section('content')
<div class="container white-panel over-page">
    <div class="row">
        <div class="col-md-12 pagecrumb">
            <h3 class="panel-title pull-left">05-Cubesmart L.P <label>05-026 Schaumburg</label></h3>
            <div class="pull-right"><img src="{{ asset('images/logo75pxw.png')}}" style="height:53px; padding-bottom: 10px;" /></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default jobs-panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Jobs</h3>
                            <div class="pull-right">

                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Job Id</th>
                                    <th>Staff Assigned</th>
                                    <th>Latest Activity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{ url('/job/J696') }}" class="my-job" data-target="#invoiceModal" data-toggle="modal">J696</a></td>
                                    <td>Matt Knize</td>
                                    <td>Mon 04/11/16</td>
                                    <td><i class="fa fa-check-circle"></i></td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('/job/J584') }}" class="my-job" data-target="#invoiceModal" data-toggle="modal">J584</a></td>
                                    <td>Jsaon Smith</td>
                                    <td>Wed 03/16/16</td>
                                    <td><i class="fa fa-check-circle"></i></td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('/job/J296') }}" class="my-job" data-target="#invoiceModal" data-toggle="modal">J296</a></td>
                                    <td>Lou Alers</td>
                                    <td>Mon 01/18/16</td>
                                    <td><i class="fa fa-check-circle"></i></td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('/job/J283') }}" class="my-job" data-target="#invoiceModal" data-toggle="modal">J283</a></td>
                                    <td>Lou Alers</td>
                                    <td>Fri 01/15/16</td>
                                    <td><i class="fa fa-check-circle"></i></td>
                                </tr>
                                <tr>
                                    <td><a href="{{ url('/job/J119') }}" class="my-job" data-target="#invoiceModal" data-toggle="modal">J119</a></td>
                                    <td>Ken Lukes</td>
                                    <td>Tue 12/08/15</td>
                                    <td><i class="fa fa-check-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Invoices</h3>
                            <div class="pull-right">

                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Invoice Id</th>
                                    <th>Job Id</th>
                                    <th>Price</th>
                                    <th>Latest Activity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00000519</td>
                                    <td>J696</td>
                                    <td>$40.50</td>
                                    <td>Wed 04/13/16</td>
                                    <td>
                                        <a href="{{ url('/invoice/8a48c3db6fc343709d9d4ac5c3e8f24f') }}" class="my-invoice" data-target="#invoiceModal" data-toggle="modal">
                                            <span class="fa-stack fa-lg width-1em">
                                                <i class="fa fa-square-o fa-stack-2x"></i>
                                                <i class="fa fa-search fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00000419</td>
                                    <td>J584</td>
                                    <td>$342.00</td>
                                    <td>Fri 03/18/16</td>
                                    <td>
                                        <a href="{{ url('/invoice/7ca537b68a174ab780e29dac90b8adf8') }}" class="my-invoice" data-target="#invoiceModal" data-toggle="modal">
                                            <span class="fa-stack fa-lg width-1em">
                                                <i class="fa fa-square-o fa-stack-2x"></i>
                                                <i class="fa fa-search fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00000181</td>
                                    <td>J296</td>
                                    <td>$43.50</td>
                                    <td>Mon 01/18/16</td>
                                    <td>
                                        <a href="{{ url('/invoice/563f4c4b6c4a4801add68891d4344004') }}" class="my-invoice" data-target="#invoiceModal" data-toggle="modal">
                                            <span class="fa-stack fa-lg width-1em">
                                                <i class="fa fa-square-o fa-stack-2x"></i>
                                                <i class="fa fa-search fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00000166</td>
                                    <td>J283</td>
                                    <td>$92.25</td>
                                    <td>Fri 01/15/16</td>
                                    <td>
                                        <a href="{{ url('/invoice/721b504867fd483385aa4637255748b7') }}" class="my-invoice" data-target="#invoiceModal" data-toggle="modal">
                                            <span class="fa-stack fa-lg width-1em">
                                                <i class="fa fa-square-o fa-stack-2x"></i>
                                                <i class="fa fa-search fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00000034</td>
                                    <td>J119</td>
                                    <td>$00.00</td>
                                    <td>Tue 12/08/15</td>
                                    <td>
                                        <a href="{{ url('/invoice/b5c4fe393a45461a861fcb3b4100898b') }}" class="my-invoice" data-target="#invoiceModal" data-toggle="modal">
                                            <span class="fa-stack fa-lg width-1em">
                                                <i class="fa fa-square-o fa-stack-2x"></i>
                                                <i class="fa fa-search fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Assets</h3>
                            <div class="pull-right">
                                <a href="{{ url('/assets') }}" class="my-assets" data-target="#theModal" data-toggle="modal">Go to Assets Page <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Contacts</h3>
                            <div class="pull-left">
                                <p>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                    </span>Bruce Goldfarb
                                </p>

                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span>(847) 895-0575 
                            </div>
                            <div class="pull-right text-right">
                                <p>
                                    <a href="mailto:stor0871@cubesmart.com" target="_blank">stor0871@cubesmart.com</a> <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                    </span>
                                </p>

                                1730 E. Irving Park Rd., Schaumburg, IL 60133 <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12" style="position: relative">
                    <div id="map"></div>
                    <div class="panel panel-default" style="bottom: -52px;position: absolute;width: 96.3%;z-index: 99">
                        <div class="panel-heading" style="height: 50px;padding: 15px;">
                            <h3 class="panel-title pull-left">1730 E. Irving Park Rd., Schaumburg, IL 60133</h3>
                            <div class="pull-right">
                                <a href="javascript:void(0)" class="map-view active" onclick="togglePanorama('map');" >Map View</a>
                                <a href="javascript:void(0)" class="street-view " onclick="togglePanorama('street');" >Street View</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
        <div class="col-md-4">
            <video style="margin-bottom: 20px; width: 100%;" type="video/mp4" autoplay loop>
                <source src="{{ asset('stortrac.mp4')}}"></source>
            </video>
            <img src="{{ asset('images/AdditionalCameras.png')}}" style="width: 100%;"/>
        </div>
    </div>
</div>
<div class="modal fade text-center" id="theModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="modal fade text-center" id="detailModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="modal fade text-center" id="invoiceModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<script>

    var map;

    function initMap() {
        var myLatLng = {lat: 42.0006133, lng: -88.1237027};

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng,
            mapTypeId: 'roadmap',
            disableDefaultUI: true,
            zoomControl: true,
            streetViewControl: true,
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            label: {
                color: '#8C171A',
                fontWeight: 'bold',
                text: '1730 E. Irving Park Rd.'
            }

        });
    }
    function togglePanorama(option) {
        if (option == 'map') {
            map.setMapTypeId('roadmap');
            //map.streetView.setVisible(false);
            $('.street-view').removeClass('active');
            $('.map-view').addClass('active');
            //$('#message').empty().append('Click here to take a tour of our office.');

        } else {
            //map.streetView.setVisible(true);
            map.setMapTypeId('satellite');
            $('.street-view').addClass('active');
            $('.map-view').removeClass('active');
            //$('#message').empty().append('Back to the map.');

        }
    }
    //initMap();
    $(".my-assets").click(function () {
        // get needed html
        var url = $(this).attr('href');

        $.get(url, function (result) {
            // append response to body
            $('#theModal .modal-content').html(result);
            // open modal
            //$('#myModal2').modal(/* options object here*/);

        });
    });

    $(".my-invoice").click(function () {
        // get needed html
        var url = $(this).attr('href');
        $('#invoiceModal .modal-content').html('');
        $.get(url, function (result) {
            // append response to body
            $('#invoiceModal .modal-content').html(result);
            // open modal
            //$('#myModal2').modal(/* options object here*/);

        });
    });
    
    $(".my-job").click(function () {
        // get needed html
        var url = $(this).attr('href');
        $('#invoiceModal .modal-content').html('');
        $.get(url, function (result) {
            // append response to body
            $('#invoiceModal .modal-content').html(result);
            // open modal

        });
    });

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeKKKx5x231Gzm6XeIOvjcZrjgiigU7aI&callback=initMap">
</script>
@endsection
