@extends('layouts.app')

@section('content')
<div class="container white-panel">
    <div class="row">
        <div class="col-md-12 pagecrumb">
            <h3 class="panel-title pull-left">05-Cubesmart L.P <label>05-026 Schaumburg</label></h3>
            <div class="pull-right"><img src="{{ asset('images/StorTracLogo1.png')}}" /></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 move-center" >
            <div class="panel panel-default">
                <div class="panel-body" style="padding-top:50px;">
                    @if(Session::has('flash_message'))
                    <div class="alert {{ (Session::has('flash_message_status'))?'alert-danger':'alert-success'}}">
                        <button class="close" data-dismiss="alert"></button>
                        {!!Session::get('flash_message') !!}
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"></button>
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    {!! Form::open(['url' => 'quote', 'method' => 'post','files' => true]) !!}
                    <div class="col-md-6">

                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Customer & Location', ['class' => 'form-label']) !!}
                            </div>
                            <!--<span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('location', ['' => 'Please Select Customer & Location','1' => '05-Cubesmart L.P 05-026 Schaumburg'], null,['class' =>'form-control'], ['placeholder' => 'Select Customer & Location']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Contact', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('contact', ['' => 'Please Select Contact','1' => 'Scott Erickson'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Assets', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('assets', ['' => 'Please Select Asset','1' => 'Battery Backup','2' => 'Power Supply','3' => 'Loop Detector'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Quote Description', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::textarea('description',null,['class' => 'form-control','size' => '30x5'])  !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left" style="margin-top: 4px;">
                                <div class="btn btn-default btn-file" style="display:block">
                                    <input type="file" hidden>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Existing Parts', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-2 col-sm-6">                                       
                                {!! Form::text('make', null, ['class' => 'form-control','placeholder' => 'Make']) !!}
                            </div>
                            <div class="col-md-2 col-sm-6">                                       
                                {!! Form::text('model', null, ['class' => 'form-control','placeholder' => 'Model']) !!}
                            </div>
                            <div class="col-md-2 col-sm-6">                                       
                                {!! Form::text('serial', null, ['class' => 'form-control','placeholder' => 'Serial #']) !!}
                            </div>
                            <div class="col-md-3 col-sm-6">                                       
                                {!! Form::text('location', null, ['class' => 'form-control','placeholder' => 'Location']) !!}
                            </div>
                            <div class="col-md-3 col-sm-6">                                       
                                {!! Form::text('condition', null, ['class' => 'form-control','placeholder' => 'Condition']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Job / Service Request', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::text('service_request', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Billable', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('billable', ['' => 'Please Select Billable','1' => 'Yes','2' => 'No'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Urgency', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('urgency', ['' => 'Please Select Urgency','1' => 'High','2' => 'Low'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'PO Number', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::text('po_number', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Approved By', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::text('approved_by', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Date', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::select('month',['' => 'Month'] + range(1, 12), null, ['class' => 'form-control small-field']) !!}
                                {!! Form::select('day', ['' => 'Day'] + range(1, 31), null, ['class' => 'form-control small-field'] )!!}
                                {!! Form::select('Year', ['' => 'Year'] + range(1980, 2020), null, ['class' => 'form-control small-field'] )!!}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">  
                            <div class="pull-right col-md-3">
                                {!! Form::submit( "Submit", ['class' => 'btn btn-primary','id' => 'btn-submit']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var map;

    function initMap() {
        var myLatLng = {lat: 42.0066092, lng: -88.1498724};

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
                text: '1730 Irving Park Rd',
            }

        });
    }
    function togglePanorama(option) {
        if (option == 'map') {
            map.setMapTypeId('roadmap');
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
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeKKKx5x231Gzm6XeIOvjcZrjgiigU7aI&callback=initMap">
</script>
@endsection
