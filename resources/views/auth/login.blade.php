@extends('layouts.simple')

@section('content')
<div class="page-content">
    <div class="logo">
        <img src="{{ asset('/images/logo.jpg') }}" alt="Logo" width="180">
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
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


</div>
@endsection

