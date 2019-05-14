@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        @include('user.request.table.pending')
        @include('user.request.table.history')
    </div>
@endsection