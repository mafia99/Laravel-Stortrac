@extends('layouts.app')

@section('content')
<div class="container white-panel">
    <div class="row">
        <div class="col-md-12 pagecrumb">
            <h3 class="panel-title pull-left">05-Cubesmart L.P <label>05-017 Hanover Park</label></h3>
            <div class="pull-right"><img src="{{ asset('images/StorTracLogo1.png')}}" /></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
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
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Invocies</h3>
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
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><i class="fa fa-search"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td><i class="fa fa-search"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><i class="fa fa-search"></i></td>
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
                                Go to Assets Page <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                                </span>
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
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>Bruce Goldfarb <br />
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span>Bruce Goldfarb <br />
                            </div>
                            <div class="pull-right text-right">
                                stor0871@cubesmart.com <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                </span> <br />
                                25W630 West Army Trail Road, Hanover Park, IL 60133 <span class="fa-stack fa-lg">
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
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">25W630 West Army Trail Road, Hanover Park, IL 60133</h3>
                            <div class="pull-right">
                                <a href="javascript:void(0)" class="btn btn-default active" onclick="togglePanorama();" >Map View</a>
                                <a href="javascript:void(0)" class="btn btn-default" onclick="togglePanorama();" >Street View</a>
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

        </div>
    </div>
</div>
<script>

    var map;
    var isPanorama = 0;
    function initMap() {
        var myLatLng = {lat: 41.940407, lng: -88.1277977};

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng,
            mapTypeId: 'roadmap',
            disableDefaultUI: true
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            label: {
                color: '#8C171A',
                fontWeight: 'bold',
                text: '25W630 West Army Trail Road',
            }

        });
    }
    function togglePanorama() {
        if (isPanorama) {
            map.setMapTypeId('roadmap');
            //$('#message').empty().append('Click here to take a tour of our office.');
            isPanorama = 0;
        } else {
            //map.streetView.setVisible(true);
            map.setMapTypeId('satellite');
            //$('#message').empty().append('Back to the map.');
            isPanorama = 1;
        }
    }
    //initMap();
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeKKKx5x231Gzm6XeIOvjcZrjgiigU7aI&callback=initMap">
</script>
@endsection
