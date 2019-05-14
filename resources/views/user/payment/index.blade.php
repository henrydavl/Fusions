@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        @include('user.payment.table.payment')
    </div>
@endsection