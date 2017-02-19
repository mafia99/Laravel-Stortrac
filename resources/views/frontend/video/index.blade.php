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
            <div class="panel panel-default" style="padding-top:50px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Saved Video</h3>
                    <div class="pull-right">

                    </div>
                </div>
                <div class="panel-body" >
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
                    {!! Form::open(['url' => 'video', 'method' => 'post','files' => true]) !!}
                    <div class="col-md-6">

                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('location', 'Camera Location', ['class' => 'form-label']) !!}
                            </div>
                            <!--<span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       

                                {!! Form::select('camera_location', ['' => 'Please Select Location','1' => 'Front Entrance'], null,['class' =>'form-control']); !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-sm-6 text-left">
                                {!! Form::label('start', 'Start', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            
                            <div class="col-md-6 col-sm-6 text-left">
                                {!! Form::label('end', 'End', ['class' => 'form-label']) !!}
                            </div>
                            <div class="col-md-6 col-sm-6">                                       
                                {!! Form::select('start',['12AM','1AM','2AM','3AM','4AM','5AM','6AM','7AM','8AM','9AM','10AM','11AM','12PM','1PM','2PM','3PM','4PM','5PM','6PM','7PM','8PM','9PM','10PM','11PM'], null, ['class' => 'form-control ']) !!}
                                
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-6 col-sm-6">                                       
                                {!! Form::select('end',['12AM','1AM','2AM','3AM','4AM','5AM','6AM','7AM','8AM','9AM','10AM','11AM','12PM','1PM','2PM','3PM','4PM','5PM','6PM','7PM','8PM','9PM','10PM','11PM'], null, ['class' => 'form-control ']) !!}
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 text-left">
                                {!! Form::label('title', 'Date', ['class' => 'form-label']) !!}
                            </div>
                            <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                            <div class="col-md-12 col-sm-12">                                       
                                {!! Form::select('month',['' => 'Month'] + range(1, 12), null, ['class' => 'form-control small-field']) !!}
                                {!! Form::select('day', ['' => 'Day'] + range(1, 31), null, ['class' => 'form-control small-field'] )!!}
                                {!! Form::select('year', ['' => 'Year'] + range(1980, 2020), null, ['class' => 'form-control small-field'] )!!}
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
