@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Edit Payment Method</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::model($pay, ['method'=>'PATCH', 'action'=>['User\PaymentController@update', $pay->id]]) !!}
                    @csrf
                    <div class="form-group">
                        {!! Form::label('name', 'Bank Name') !!}
                        {!! Form::text('name', $pay->namaBank, ['class'=>'form-control', 'placeholder'=>'Bank Name..', 'disabled'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('acc', 'Account Number') !!}
                        {!! Form::text('acc', $pay->nomorRekening, ['class'=>'form-control', 'placeholder'=>'Account Number...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('owner', 'Owner Name') !!}
                        {!! Form::text('owner', $pay->atasNama, ['class'=> 'form-control', 'placeholder' =>'Owner Name...']) !!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('payment.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Edit Method', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection