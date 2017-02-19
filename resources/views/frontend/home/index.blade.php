@extends('layouts.app')

@section('content')

<div class="container grid">
    <div class="row">
        <div class="col-md-12 pagecrumb">
           
            <div class="pull-right"><img src="{{ asset('images/logo75pxw.png')}}" style="height:53px; padding-bottom: 10px;" /></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 move-center top-200" >
            <div class="panel panel-default">
                <div class="panel-heading text-left"><label>05 Cubesmart L.P.</label>

                </div>
                <div class="panel-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"></button>
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif

                    {!! Form::open(['url' => 'home', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

                            <div class="col-md-12 col-sm-12">

                                {!! Form::select('location', ['' => 'Please Select Location','1' => '05-026 Schaumburg'], null,['class' =>'form-control'], ['placeholder' => 'Optional']); !!}

                                

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="form-group">
                            <div class="col-md-5 move-center" >
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!--<i class="fa fa-btn fa-sign-in"></i>-->
@endsection
