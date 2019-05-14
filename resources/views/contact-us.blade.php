@extends('layout.pages')
@section('content')
    <div class="container" style="margin-top: 1em">
        @include('inc.alert')
    </div>
    <section id="mett" style="margin-top: 7em;">
        <div class="container meetform">
            <div class="row no-gutters">
                <div class="col-md-6"><img class="img-fluid" src="assets/img/aaa.png" width="100">
                    <h4 class="consult">Fusions Visual Digital Studio</h4>
                    <h2 class="consulth2">Contact Form</h2>
                    <hr class="separate">
                    <h5 class="consult"><i class="fa fa-phone"></i>&nbsp; +6285880388900<br></h5>
                    <h5 class="consult"><i class="fab fa-instagram"></i>&nbsp; Fusionsvisual.id</h5>
                    <h5 class="consult"><i class="far fa-envelope"></i>&nbsp; customer@fusionsvisual.com</h5>
                </div>
                <div class="col-md-6">
                    <h2 class="formtitle">Contact Us</h2>
                    {!! Form::open(['method'=>'POST', 'action'=>'FormController@contactus']) !!}
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-6">
                            {!! Form::label('fname', 'First Name *') !!}
                            {!! Form::text('fname', null, ['class'=>'form-control', 'placeholder'=>'First Name...', 'required']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('lname', 'Last Name') !!}
                            {!! Form::text('lname', null, ['class'=>'form-control', 'placeholder'=>'Last Name...']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::label('email', 'Your e-mail address *') !!}
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Last Name...', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>What's on your mind?</label>
                            {!! Form::textarea('else', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Type something...', 'rows' => '6', 'style' => 'resize:none']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::submit('Contact Us', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection