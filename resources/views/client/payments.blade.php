@extends('layouts.panel')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="widget">
        <div class="widget-heading">
            <h3 class="widget-title">Cronograma de pagos</h3>
        </div>
        <div class="widget-body">
            <p class="mb-20">Si tienes alguna duda por favor usa el <a href="#">formulario de contacto</a>.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Total</th>
                    <th>Neto</th>
                    <th>Fecha de emisión</th>
                    <th>Fecha de pago</th>
                    <th>Días de retraso</th>
                    <th>Estado</th>
                    {{-- PAGADO, ESPERANDO PAGO, NO SOLICITADO --}}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>$ 1.000,00</td>
                    <td>$ 920,00</td>
                    <td>01/12/16</td>
                    <td>02/12/16</td>
                    <td>1</td>
                    <td>
                        <span class="label label-outline label-success">Pagado</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>$ 1.000,00</td>
                    <td>$ 920,00</td>
                    <td>01/03/17</td>
                    <td>-</td>
                    <td>4</td>
                    <td>
                        <span class="label label-outline label-purple">Esperando pago</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>$ 1.000,00</td>
                    <td>$ 920,00</td>
                    <td>01/06/17</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <span class="label label-outline label-primary">No solicitado</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
