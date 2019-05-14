@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New Portfolio</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    <img src="http://placehold.it/400x400" height="200" class="img-profile rounded-circle py-2">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\PortfolioController@store', 'files' => 'true']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Title') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Title..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('des', 'Description ') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'required', 'rows' => '4', 'style' => 'resize:none', 'placeholder'=>'Description..' ])!!}
                    </div>
                    <div class="form-group d-flex flex-column">
                        {!! Form::label('photo_id', 'Portfolio Image') !!}
                        {!! Form::file('image', null, ['class'=>'form-control', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipe', 'Category') !!}
                        {!! Form::select('tipe', array(''=>'Choose category',
                                                '0' => 'Website',
                                                '1' => 'Mobile Application',
                                                '2' => 'Design'), null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Create Portfolio', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection