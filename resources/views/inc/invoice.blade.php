<!-- The Modal -->
<div class="modal fade" id="invoice-{{$inbox->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Invoice no {{$inbox->name}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::open(['method'=>'POST']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Subject') !!}
                    {!! Form::text('subject', null, ['class'=>'form-control', 'required', 'placeholder'=>'Subject..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Message') !!}
                    {!! Form::textarea('message', null, ['class'=>'form-control', 'required', 'placeholder'=>'Message..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Reply', ['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>