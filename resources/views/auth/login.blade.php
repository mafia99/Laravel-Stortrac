@extends('layouts.auth')

@section('content')

<div class="container grid">
    <div class="row">
        <div class="col-md-4 move-center top-200" >
            <img src="{{ asset('images/logo75pxw.png')}}" />
            <div class="panel panel-default">
                <div class="panel-heading text-left"><label>Log In</label>
                    <a class="btn btn-link forgot" href="{{ url('/password/reset') }}">Forgot Password?</a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <div class="text-field user-icon">
                                    <input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="User Name">
                                </div>    
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <div class="text-field passwod-icon">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 move-center" >
                                <button type="submit" class="btn btn-primary">
                                     LOG IN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<i class="fa fa-btn fa-sign-in"></i>-->
@endsection
