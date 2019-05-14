@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.projects.table.web')
        @include('admin.projects.table.app')
        @include('admin.projects.table.design')
    </div>
@endsection