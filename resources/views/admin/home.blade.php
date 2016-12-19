@extends('layouts.admin')

@section('dashboard_content')
    <div class="page-content container-fluid">

        @include('includes.dashboard')
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('build/js/page-content/dashboard/index.js') }}"></script>
@endsection