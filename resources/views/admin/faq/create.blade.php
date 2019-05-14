@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">New FAQ</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\FaqController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('question', 'Question') !!}
                        {!! Form::text('question', null, ['class'=>'form-control', 'placeholder'=>'Question..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('answer', 'Answer') !!}
                        {!! Form::textarea('answer', null, ['class'=>'form-control', 'placeholder'=>'Answer...'])!!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('faq.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Add New Question and Answer', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection