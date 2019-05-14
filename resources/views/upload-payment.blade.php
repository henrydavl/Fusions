@extends('layout.pages')
@section('content')
    <section id="login">
        <div class="container">
            @include('inc.alert')
        </div>
        <div class="container" id="logform">
            <div class="formlog">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="formbody"><img class="img-fluid" src="{{asset('assets/img/aaa(2).png')}}" width="100">
                            <h1 class="wb">Upload Payment Receipt </h1>
                            {!! Form::open(['method'=>'POST', 'action'=>'CheckoutController@ConfirmPayment', 'files' => 'true']) !!}
                            {{ csrf_field() }}
                            <div class="form-group text-left">
                                <label class="pl-4">Order ID</label>
                                {!! Form::number('ids', null, ['class'=>'form-control inlog','min'=>1 ,'placeholder'=>'Order Number...', 'required']) !!}
                            </div>
                            <div class="form-group text-left">
                                <label class="pl-4">Email Address</label>
                                {!! Form::email('email', null, ['class'=>'form-control inlog', 'placeholder'=>'Your E-mail Address...', 'required']) !!}
                            </div>
                            <div class="form-group text-left pl-4 d-flex flex-column">
                                <label for="">Transfer Receipt</label>
                                {!! Form::file('receipt', null, ['class'=>'form-control', 'required' => '']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Upload', ['class'=>'btn btn-primary logbtn']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection