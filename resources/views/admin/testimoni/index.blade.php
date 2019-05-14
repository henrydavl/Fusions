@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.testimoni.table.list')
    </div>
@endsection