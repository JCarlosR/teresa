@extends('layouts.dashboard')

@section('dashboard_content')
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Styled Map</h3>
                </div>
                <div class="widget-body">
                    <div id="styledMap" style="height: 400px;">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="widget">
                <div class="widget-heading">
                    <h3 class="widget-title">Street View</h3>
                </div>
                <div class="widget-body">
                    <div id="streetviewMap" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK0Wk9CEkyOK4MtWPFkzvhBmxly_5TpU0"></script>
    <script src="{{ asset('build/js/page-content/maps/google-maps.js') }}"></script>
@endsection
