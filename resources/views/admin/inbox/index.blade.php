@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inbox From Contact Form</h1>
        </div>
        @include('inc.alert')
        @include('admin.inbox.table.pending')
        @include('admin.inbox.table.history')
    </div>
@endsection