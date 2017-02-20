@extends('layouts.app')

@section('content')
<div class="container white-panel">
    <div class="row">
        <div class="col-md-12 pagecrumb">
            <h3 class="panel-title pull-left">05-Cubesmart L.P <label>05-026 Schaumburg</label></h3>
            <div class="pull-right"><img src="{{ asset('images/logo75pxw.png')}}" style="height:53px; padding-bottom: 10px;" /></div>
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
                    {!! Form::open(['url' => 'service', 'method' => 'post','files' => true]) !!}
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

                                {!! Form::select('assets', ['' => 'Please Select Asset','1' => 'Battery Backup','2' => 'Power Supply','3' => 'Loop Detector','4'=>'Gate Operator','5'=>'Keypad','6'=>'Gate','7'=>'Security Cameras - East'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Job / Service Request', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::select('service_request', $tasklist, null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
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

                                {!! Form::select('urgency', ['' => 'Please Select Urgency','1' => 'High','2' => 'Medium','3' => 'Low'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Parts Needed', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('billable', ['' => 'Please Select Parts','1' => 'Yes','2' => 'Received'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}
                            </div>
                        </div>




                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Service Description', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::textarea('description',null,['class' => 'form-control','size' => '30x5'])  !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                <div class="btn btn-default btn-file" style="display:block">
                                    <input type="file" hidden>
                                </div>
                            </div>

                        </div>
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
@endsection
