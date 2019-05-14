<div class="container">
    <div class="row no-gutters">
        <div class="col">
            <h2 class="text-center pb-3"><strong>Add Your Review</strong></h2>
        </div>
    </div>
    {!! Form::open(['method'=>'POST', 'class'=>'form-review']) !!}
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label class="col-form-label">Full Name</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('name', \Illuminate\Support\Facades\Auth::user()->name, ['class'=>'form-control', 'readonly', 'placeholder'=>'E-mail Address...']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label class="col-form-label">Activities</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('activity', null, ['class'=>'form-control', 'required', 'placeholder'=>'Activities..' ])!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label class="col-form-label">Website</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('website', null, ['class'=>'form-control', 'required', 'placeholder'=>'http://..' ])!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label class="col-form-label">Comments</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::textarea('comments', null, ['class'=>'form-control', 'required', 'rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Comments..' ])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-xl-1">
                <h4>Rate Us</h4>
                <div class="form-group" style="margin: 0;">
                    <label style="margin-bottom: 0;">Price</label>
                    {!! Form::range('price', null, ['class'=>'custom-range', 'required', 'min'=>1,'max'=>5,'step'=>1 ])!!}
                </div>
                <div class="form-group" style="margin: 0;">
                    <label style="margin-bottom: 0;">Support</label>
                    {!! Form::range('support', null, ['class'=>'custom-range', 'required', 'min'=>1,'max'=>5,'step'=>1 ])!!}
                </div>
                <div class="form-group" style="margin: 0;">
                    <label style="margin-bottom: 0;">Features</label>
                    {!! Form::range('fitur', null, ['class'=>'custom-range', 'required', 'min'=>1,'max'=>5,'step'=>1 ])!!}
                </div>
            </div>
        </div>
        <div class="form-row no-gutters">
            <div class="col text-center">
                @if($input == false)
                    {!! Form::submit('Submit Review', ['class'=>'btn btn-outline-primary', 'disabled']) !!}
                @else
                    {!! Form::submit('Submit Review', ['class'=>'btn btn-outline-primary']) !!}
                @endif
            </div>
        </div>
    {!! Form::close() !!}
</div>