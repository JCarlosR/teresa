@extends('layouts.auth')

@section('content')
<div class="page-content">
    <div class="logo">
        <h1>TERESA v1.0</h1>
        {{--<img src="{{ asset('build/images/logo/logo-dark.png') }}" alt="Logo" width="160">--}}
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-warning' : '' }}">
            <div class="col-xs-12">
                <input type="text" placeholder="Nombres" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-warning' : '' }}">
            <div class="col-xs-12">
                <input type="text" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-warning' : '' }}">
            <div class="col-xs-12">
                <input type="password" placeholder="Contraseña" class="form-control" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-warning' : '' }}">
            <div class="col-xs-12">
                <input type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<div class="col-xs-12">--}}
                {{--<div style="margin-bottom: 7px" class="checkbox-inline checkbox-custom">--}}
                    {{--<input id="checkboxAgree" type="checkbox">--}}
                    {{--<label for="checkboxAgree">Acepto los términos y condiciones</label>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <button type="submit" class="btn btn-success btn-rounded btn-block">Registrarme</button>
    </form>
    {{--<hr>--}}
    {{--<p class="text-muted">Sign up with your Facebook or Twitter accounts</p>--}}
    {{--<div class="clearfix">--}}
        {{--<div class="pull-left">--}}
            {{--<button type="button" style="width: 130px" class="btn btn-outline btn-rounded btn-primary"><i class="ion-social-facebook mr-5"></i> Facebook</button>--}}
        {{--</div>--}}
        {{--<div class="pull-right">--}}
            {{--<button type="button" style="width: 130px" class="btn btn-outline btn-rounded btn-info"><i class="ion-social-twitter mr-5"></i> Twitter</button>--}}
        {{--</div>--}}
    {{--</div>--}}
    <hr>
    <div class="clearfix">
        <p class="text-muted mb-0 pull-left">Ya te has registrado?</p>
        <a href="{{ url('/login') }}" class="inline-block pull-right">Ingresar</a>
    </div>
</div>
@endsection
