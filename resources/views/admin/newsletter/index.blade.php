@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.newsletter.table.subscriber')
    </div>
@endsection