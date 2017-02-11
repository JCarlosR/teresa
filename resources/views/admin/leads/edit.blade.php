@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Leads en función al cronograma # {{ $paymentSchedule->id }}</h3>
        </div>
        <div class="widget-body">

            @if (session('notification'))
                <div class="alert alert-success">
                    <p>{{ session('notification') }}</p>
                </div>
            @endif

            <p class="mb-20">Leads según su tipo y en total, por cada categoría de leads y en cada periodo del servicio.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Desde</th>
                    @foreach ($details as $key => $detail)
                        <td class="text-center">{{ $detail->emission_date->format('d/m/Y') }}</td>
                    @endforeach
                    <th></th>
                </tr>
                <tr>
                    <th>Conversiones</th>
                    @foreach ($details as $key => $detail)
                    <td class="text-center">{{ $key+1 }}º {{ $paymentSchedule->modality_short_text }}</td>
                    @endforeach
                    <th>Total</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>

                <form action="{{ url('/admin/leads/update?category=employment') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Empleo</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->employment; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->employment ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <form action="{{ url('/admin/leads/update?category=suppliers') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Proveedores</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->suppliers; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->suppliers ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <form action="{{ url('/admin/leads/update?category=followers') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Seguidores</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->followers; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->followers ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <form action="{{ url('/admin/leads/update?category=contact') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Contacto</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->contact; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->contact ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <form action="{{ url('/admin/leads/update?category=projects') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Proyectos</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->projects; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->projects ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <form action="{{ url('/admin/leads/update?category=others') }}" method="POST">
                    {{ csrf_field() }}
                    <tr>
                        <th scope="row">Otros</th>
                        <?php $total = 0; ?>
                        @foreach ($details as $detail)
                            <?php $total += $detail->others; ?>
                            <td>
                                <input type="hidden" name="details[]" value="{{ $detail->id }}">
                                <input name="leads[]" type="number" value="{{ $detail->others ?: 0 }}" class="form-control">
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $total }}
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm" title="Guardar" type="submit">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                        </td>
                    </tr>
                </form>

                <tr>
                    <td>Total</td>
                    <?php $total = 0; ?>
                    @foreach ($details as $detail)
                        <?php $total += $detail->total_leads; ?>
                        <td>
                            {{ $detail->total_leads }}
                        </td>
                    @endforeach
                    <td>{{ $total }}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/panel/employees/create.js') }}"></script>
@endsection
