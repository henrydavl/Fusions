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
                            <h1 class="wb">Resend Activation Email</h1>
                            {!! Form::open(['method'=>'POST', 'action'=>'Auth\ActivationController@resend']) !!}
                            {{ csrf_field() }}
                            <div class="form-row">
                                {!! Form::email('email', null, ['class'=>'form-control inlog', 'placeholder'=>'E-mail Address...']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row">
                                {!! Form::submit('Resend', ['class'=>'btn btn-primary logbtn']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection