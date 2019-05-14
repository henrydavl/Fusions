@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.faq.table.qna')
    </div>
@endsection