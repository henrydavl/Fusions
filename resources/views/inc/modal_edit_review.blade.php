<!-- The Modal -->
<div class="modal fade" id="editreview-{{$review->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit {{$review->user->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($review, ['method'=>'PATCH' , 'action'=>['User\ReviewController@update', $review->id]]) !!}
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">Full Name</label>
                            {!! Form::text('name', \Illuminate\Support\Facades\Auth::user()->name, ['class'=>'form-control', 'readonly', 'placeholder'=>'Name...']) !!}
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Activities</label>
                            {!! Form::text('activity', null, ['class'=>'form-control', 'required', 'placeholder'=>'Activities..' ])!!}
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Website</label>
                            {!! Form::text('website', null, ['class'=>'form-control', 'required', 'placeholder'=>'http://..' ])!!}
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Comments</label>
                            {!! Form::textarea('comments', null, ['class'=>'form-control', 'required', 'rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Comments..' ])!!}
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
                <div class="form-group">
                    {!! Form::submit('Update Review', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>