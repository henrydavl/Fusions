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
                            <h1 class="wb">Let's start your new adventure!</h1>
                            <p>Turn your ideas into reality with us!</p>
                            {!! Form::open(['method'=>'POST', 'action'=>'Auth\RegisterController@register']) !!}
                            {{ csrf_field() }}
                            <div class="form-row">
                                {!! Form::text('name', null, ['class'=>'form-control inlog', 'placeholder'=>'Full Name..' , 'required'=>'']) !!}
                            </div>
                            <div class="form-row">
                                {!! Form::email('email', null, ['class'=>'form-control inlog', 'placeholder'=>'E-mail Address...' , 'required'=>'']) !!}
                            </div>
                            <div class="form-row">
                                {!! Form::password('password', ['class'=>'form-control inlog', 'placeholder'=>'Password...' , 'required'=>'']) !!}
                            </div>
                            <div class="form-row">
                                {!! Form::password('password_confirmation', ['class'=>'form-control inlog', 'placeholder'=>'Re-type Password...' , 'required'=>'']) !!}
                            </div>
                            <div class="form-row">
                                {!! Form::submit('Sign Up', ['class'=>'btn btn-primary logbtn']) !!}
                            </div>
                            {!! Form::close() !!}
                            <p class="forpass">Already have account?&nbsp;<a href="{{ route('login') }}">Login Here.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection