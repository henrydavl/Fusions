@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">App Project -
                    #APP{{str_pad($app->id, 4, '0', STR_PAD_LEFT)}}</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend>Project Details</legend>
                    {!! Form::model($app,['method'=>'PATCH', 'action'=>['Admin\ProyekAppController@update', $app->id]]) !!}
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #APP{{str_pad($app->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>App Name</h6>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Application Name..']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>Theme Reference</h6>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('themeRef', null, ['class'=>'form-control', 'placeholder'=>'Template / Design Reference..']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>Color</h6>
                        </div>
                        <label class="pl-3">Primary :</label>
                        <div class="col-md-2">
                            {!! Form::text('colorPrimary', $app->color->colorPrimary, ['class' => 'form-control colorpicker','placeholder' => 'Primary Color..']) !!}
                        </div>
                        <label class="pl-3">Secondary :</label>
                        <div class="col-md-2">
                            {!! Form::text('colorPrimary', $app->color->colorSecondary, ['class' => 'form-control colorpicker','placeholder' => 'Primary Color..']) !!}
                        </div>
                        <label class="pl-3">Tertiary :</label>
                        <div class="col-md-2">
                            {!! Form::text('colorPrimary', $app->color->colorTertiary, ['class' => 'form-control colorpicker','placeholder' => 'Primary Color..']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9">
                            {!! Form::textarea('penjelasan', null, ['class'=>'form-control', 'rows' => '4', 'style' => 'resize:none', 'placeholder'=>'Description..' ])!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9">
                            {!! Form::select('status', ['0'=>'idle', '1' => 'Ongoing', '2' => 'Maintenance'], null, ['class'=>'custom-select']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>Deadline</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->deadline == null) - @else {{\Carbon\Carbon::parse($app->deadline)->format('d F Y')}} @endif
                        </div>
                    </div>
                    @if($app->proyekWeb_id != null)
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Hosting</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->hosting_id == null) - @else #HOS{{str_pad($app->hosting_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Domain</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->domain_id == null) - @else #DOM{{str_pad($app->domain_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h6>ZIP Data</h6>
                        </div>
                        <div class="col-md-9">
                            {!! Form::file('zipData', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            {!! Form::submit('Update Project', ['class'=>'btn btn-primary']) !!}
                            @if($app->zipData != null)
                                <a href="" class="btn btn-success">Download ZIP</a>
                            @endif
                        </div>
                    </div>
                    {!! Form::close() !!}
                </fieldset>
            </div>
        </div>
    </div>
@endsection