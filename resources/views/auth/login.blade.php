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
                            <h1 class="wb">Welcome Back!</h1>
                            <p>Let's continue our journey together!</p>
                            {!! Form::open(['method'=>'POST', 'action'=>'Auth\LoginController@login']) !!}
                            {{ csrf_field() }}
                            <div class="form-row">
                                {!! Form::email('email', null, ['class'=>'form-control inlog', 'placeholder'=>'E-mail Address...', 'required'=>'']) !!}
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                {!! Form::password('password', ['class'=>'form-control inlog', 'placeholder'=>'Password...', 'required'=>'']) !!}
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                {!! Form::submit('Login', ['class'=>'btn btn-primary logbtn']) !!}
                            </div>
                            {!! Form::close() !!}
                            <p class="forpass">Forgot password?&nbsp;<a href="{{ route('password.request') }}">Reset Here.</a></p>
                            <p class="forpass">Don't have account?&nbsp;<a href="{{ route('register') }}">Sign up
                                    Here.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection