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
                            <h1 class="wb">Reset Password</h1>
                            {!! Form::open(['method'=>'POST', 'action'=>'Auth\ResetPasswordController@reset']) !!}
                            {{ csrf_field() }}
                            {!! Form::hidden('token', $token) !!}
                            <div class="form-row">
                                {!! Form::email('email', null, ['class'=>'form-control inlog', 'placeholder'=>'E-mail Address...', 'required'=>'']) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row">
                                {!! Form::password('password', ['class'=>'form-control inlog', 'placeholder'=>'Password...', 'required'=>'']) !!}
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row">
                                {!! Form::password('password_confirmation', ['class'=>'form-control inlog', 'placeholder'=>'Confirm Password...', 'required'=>'']) !!}
                            </div>
                            <div class="form-row">
                                {!! Form::submit('Reset Password', ['class'=>'btn btn-primary logbtn']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
