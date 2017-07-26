@extends('client.inbox.base')

@section('inbox_content')
    <div class="page-actions">
        <div class="row">
            <div class="col-sm-6">

                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Todos <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu animated fadeInUp">
                        <li><a href="#">Todos</a></li>
                        <li><a href="#">Leídos</a></li>
                        <li><a href="#">No leídos</a></li>
                        <li><a href="#">Destacados</a></li>
                        <li><a href="#">No destacados</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default"><i class="ion-refresh"></i></button>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="ion-folder"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-trash-b"></i></button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group has-feedback mb-0 inline-block">
                    <input type="text" aria-describedby="searchMailList" placeholder="Buscar mensaje ..." style="width: 180px" class="form-control rounded"><span aria-hidden="true" class="ion-search form-control-feedback"></span><span id="searchMailList" class="sr-only">(default)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <tbody>
            @if (count($messages) == 0)
                <div class="clearfix">
                    <div class="pull-left">No se han encontrado mensajes.</div>
                </div>
            @endif
            @foreach ($messages as $message)
                <tr class="unread">
                    <td class="email-select">
                        <div class="checkbox checkbox-custom m-0">
                            <input id="chk{{ $message->id }}" type="checkbox">
                            <label for="chk{{ $message->id }}"></label>
                        </div>
                    </td>
                    <td class="email-select"><i class="ion-star text-warning"></i></td>
                    <td class="email-from">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="media-heading">{{ $message->name }}</h5>
                                <p class="text-muted mb-0">
                                    <time datetime="{{ $message->created_at }}" class="fs-13 mr-5">
                                        {{ $message->created_at->format('d/m/Y') }}
                                    </time>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ url('/inbox/messages/'.$message->id) }}">
                            <span class="email-title">{{ $message->phone }}</span>
                            <span class="email-summary"> - {{ $message->short_content }}</span>
                        </a>
                    </td>
                </tr>
            @endforeach
            {{--<tr class="unread">--}}
            {{--<td class="email-select">--}}
            {{--<div class="checkbox checkbox-custom m-0">--}}
            {{--<input id="chk4" type="checkbox">--}}
            {{--<label for="chk4"></label>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td class="email-select"><i class="ion-star text-warning"></i></td>--}}
            {{--<td class="email-from">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><span class="media-object mo-md img-circle bg-purple text-center fw-700">D</span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading">Debra Spencer</h5>--}}
            {{--<p class="text-muted mb-0">--}}
            {{--<time datetime="2016-12-10T20:27:48+07:00" class="fs-13 mr-5">16 Oct 2016</time>--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td><a href="email-read.html"><span class="email-title">Massa metus euismod egestas egestas</span><span class="email-summary"> - Duis aliquet dui laoreet ad neque class dui...</span></a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="email-select">--}}
            {{--<div class="checkbox checkbox-custom m-0">--}}
            {{--<input id="chk5" type="checkbox">--}}
            {{--<label for="chk5"></label>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td class="email-select"><i class="ion-star"></i></td>--}}
            {{--<td class="email-from">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><span class="media-object mo-md img-circle bg-black text-center fw-700">S</span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading">Stephanie May</h5>--}}
            {{--<p class="text-muted mb-0">--}}
            {{--<time datetime="2016-12-10T20:27:48+07:00" class="fs-13 mr-5">16 Oct 2016 </time><i class="ion-android-attach fs-16"></i>--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td><a href="email-read.html"><span class="email-title">Et parturient phasellus rhoncus</span><span class="email-summary"> - Vivamus elit sapien risus fames nulla primis magna...</span></a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="email-select">--}}
            {{--<div class="checkbox checkbox-custom m-0">--}}
            {{--<input id="chk6" type="checkbox">--}}
            {{--<label for="chk6"></label>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td class="email-select"><i class="ion-star"></i></td>--}}
            {{--<td class="email-from">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><img src="../build/images/users/16.jpg" alt="" class="media-object mo-md img-circle"></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading">Diana Wilson</h5>--}}
            {{--<p class="text-muted mb-0">--}}
            {{--<time datetime="2016-12-10T20:27:48+07:00" class="fs-13 mr-5">15 Oct 2016</time>--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td><a href="email-read.html"><span class="email-title">Aliquam fusce sollicitudin</span><span class="email-summary"> - Pulvinar non orci ligula dictum magna adipiscing class...</span></a></td>--}}
            {{--</tr>--}}
            {{--<tr class="unread">--}}
            {{--<td class="email-select">--}}
            {{--<div class="checkbox checkbox-custom m-0">--}}
            {{--<input id="chk7" type="checkbox">--}}
            {{--<label for="chk7"></label>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td class="email-select"><i class="ion-star text-warning"></i></td>--}}
            {{--<td class="email-from">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><span class="media-object mo-md img-circle bg-danger text-center fw-700">P</span></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading">Patrick Gardner</h5>--}}
            {{--<p class="text-muted mb-0">--}}
            {{--<time datetime="2016-12-10T20:27:48+07:00" class="fs-13 mr-5">12 Oct 2016 </time><i class="ion-android-attach fs-16"></i>--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td><a href="email-read.html"><span class="email-title">Convallis natoque urna pulvinar tempor</span><span class="email-summary"> - Ultrices ultricies ante leo duis pretium...</span></a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="email-select">--}}
            {{--<div class="checkbox checkbox-custom m-0">--}}
            {{--<input id="chk9" type="checkbox">--}}
            {{--<label for="chk9"></label>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td class="email-select"><i class="ion-star"></i></td>--}}
            {{--<td class="email-from">--}}
            {{--<div class="media">--}}
            {{--<div class="media-left"><img src="../build/images/users/17.jpg" alt="" class="media-object mo-md img-circle"></div>--}}
            {{--<div class="media-body">--}}
            {{--<h5 class="media-heading">Laura Andrews</h5>--}}
            {{--<p class="text-muted mb-0">--}}
            {{--<time datetime="2016-12-10T20:27:48+07:00" class="fs-13 mr-5">10 Oct 2016 </time><i class="ion-android-attach fs-16"></i>--}}
            {{--</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td><a href="email-read.html"><span class="email-title">Condimentum laoreet mi cursus</span><span class="email-summary"> - Convallis faucibus sed pharetra consectetur...</span></a></td>--}}
            {{--</tr>--}}
            </tbody>
        </table>
    </div>
    {{--<div class="clearfix">--}}
    {{--<div class="pull-left">Mostrando 1 - 10 de 100</div>--}}
    {{--<div class="btn-group pull-right">--}}
    {{--<button type="button" class="btn btn-default"><i class="ion-arrow-left-c"></i></button>--}}
    {{--<button type="button" class="btn btn-default"><i class="ion-arrow-right-c"></i></button>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
