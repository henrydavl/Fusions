@extends('layout.pages')
@section('content')
    <section id="met">
        <div class="container meetform">
            @include('inc.alert')
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="img-fluid" src="assets/img/aaa.png" width="100">
                    <h4 class="consult">Fusions Visual Digital Studio</h4>
                    <h4 class="consult"></h4>
                    <h2 class="consulth2">30 Minute Meeting</h2>
                    <hr class="separate">
                    <h5 class="consult">
                        <i class="far fa-clock"></i>&nbsp; 30 min
                    </h5>
                    <h5 class="consult">
                        <i class="fas fa-globe-americas"></i>&nbsp; Western Indonesian Time (WIB)
                    </h5>
                </div>
                <div class="col-md-6">
                    <h2 class="formtitle">Enter Details</h2>
                    {!! Form::open(['method'=>'POST', 'action'=>'FormController@meetus']) !!}
                    {{ csrf_field() }}
                    {!! Form::label('form', 'Choose time of Meeting *') !!}
                    <div class="form-row ex">
                        <div class="col-md-4">
                            {!! Form::label('month', 'Month') !!}
                            {!! Form::text('month', \Carbon\Carbon::now()->monthName, ['class'=>'form-control', 'readonly']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('date', 'Date *') !!}
                            {!! Form::selectRange('date', \Carbon\Carbon::now()->day, \Carbon\Carbon::now()->day+7, \Carbon\Carbon::now()->day, ['class'=>'custom-select', 'required'=>'']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('time', 'Time *') !!}
                            {!! Form::select('time', array('13:00', '13:30', '14:00'), null, ['class'=>'custom-select', 'required'=>'']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::label('metod', 'Method of Meeting *') !!}
                            {!! Form::select('metod', array(''=>'----', 'Online', 'Offline'), null, ['id'=>'mthod', 'class'=>'custom-select', 'required'=>'']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            {!! Form::label('fname', 'First Name *') !!}
                            {!! Form::text('fname', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'First Name...']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('lname', 'Last Name *') !!}
                            {!! Form::text('lname', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Last Name...']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::label('email', 'Your E-mail Address *') !!}
                            @if($user = \Illuminate\Support\Facades\Auth::user())
                            {!! Form::email('email', $user->email, ['class'=>'form-control', 'readonly', 'placeholder'=>'E-mail Address...']) !!}
                                <span class="text-primary">Your email has filled automaticaly because your are logged in.</span>
                            @else
                                {!! Form::email('email', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'E-mail Address...']) !!}
                            @endif
                        </div>
                    </div>
                    <div class="form-row" id ="phoneOrSkype">
                        <div class="col-md-12">
                            {!! Form::label('phone', 'Phone Number / Skype ID *') !!}
                            {!! Form::text('phone', null, ['class'=>'form-control', 'id' => 'phoneS', 'placeholder'=>'Phone Number / Skype ID']) !!}
                        </div>
                    </div>
                    <div class="form-row" id="meetplace">
                        <div class="col-md-12">
                            {!! Form::label('place', 'Prefered Place of Meeting *') !!}
                            {!! Form::select('place', array('----',
                                                'Starbucks Gwalk Citraland Surabaya',
                                                'Excelso Gwalk Citraland Surabaya',
                                                'Calipto Cafe TPR Citraland'),
                                null, ['class'=>'custom-select', 'id' => 'mplace']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::label('topic', 'Topic of Discussion *') !!}
                            <div class="custom-control custom-switch">
                                {!! Form::checkbox('design',null, null, ['class'=>'custom-control-input', 'id'=>'formCheck-1']) !!}
                                {!! Form::label('formCheck-1', 'Graphics Design', ['class'=>'custom-control-label']) !!}
                            </div>
                            <div class="custom-control custom-switch">
                                {!! Form::checkbox('web', null, null, ['class'=>'custom-control-input', 'id'=>'formCheck-2']) !!}
                                {!! Form::label('formCheck-2', 'Website Development', ['class'=>'custom-control-label']) !!}
                            </div>
                            <div class="custom-control custom-switch">
                                {!! Form::checkbox('app', null, null, ['class'=>'custom-control-input', 'id'=>'formCheck-3']) !!}
                                {!! Form::label('formCheck-3', 'Mobile Apps Development', ['class'=>'custom-control-label']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            {!! Form::label('else', 'Anything else we should know ahead of time?') !!}
                            {!! Form::text('else', null, ['class'=>'form-control', 'placeholder'=>'what\'s on your mind?']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        {!! Form::submit('Schedule Meeting', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection