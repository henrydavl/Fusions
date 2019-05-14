@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Broadcast an email</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\NewsLetterController@sendmail']) !!}
                    <div class="form-group">
                        {!! Form::label('sub', 'Question') !!}
                        {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Subject..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('msg', 'Answer') !!}
                        {!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Message...', 'resize'=>'none', 'rows'=>'4'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Broadcast', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection