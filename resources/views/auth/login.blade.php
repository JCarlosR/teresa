@extends('layouts.simple')

@section('content')
<div class="page-content">
    <div class="logo">
        <h1>TERESA v1.0</h1>
        {{--<img src="{{ asset('build/images/logo/logo-dark.png') }}" alt="Logo" width="160">--}}
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <div class="col-xs-12">
                <input type="text" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input type="password" placeholder="Contraseña" class="form-control" name="password" autocomplete="new-password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox-inline checkbox-custom pull-left">
                    <input id="remember" type="checkbox" name="remember">
                    <label for="remember">Recordar sesión</label>
                </div>
                <div class="pull-right">
                    <a href="{{ url('/password/reset') }}" class="inline-block form-control-static">Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-rounded btn-block">Iniciar sesión</button>
    </form>
    {{--<hr>--}}
    {{--<p class="text-muted">Sign in with your Facebook or Twitter accounts</p>--}}
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
        <p class="text-muted mb-0 pull-left">¿Deseas registrarte?</p>
        <a href="{{ url('/register') }}" class="inline-block pull-right">Registrarme</a>
    </div>
</div>
@endsection

