@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New Payment Method</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'User\PaymentController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Bank Name') !!}
                        {!! Form::text('namaBank', null, ['class'=>'form-control','required', 'placeholder'=>'Bank Name..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('acc', 'Account Number') !!}
                        {!! Form::text('nomorRekening', null, ['class'=>'form-control', 'required', 'placeholder'=>'Account Number...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('owner', 'Owner Name') !!}
                        {!! Form::text('atasNama', null, ['class'=> 'form-control', 'required', 'placeholder' =>'Owner Name...']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add New Method', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection