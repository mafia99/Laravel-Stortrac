@extends('layouts.auth')

<!-- Main Content -->
@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <div class="text-field user-icon">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 move-center">
                                <button type="submit" class="btn btn-primary">
                                     Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
