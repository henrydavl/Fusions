<!-- The Modal -->
<div class="modal fade" id="editModal-{{$portfolio->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit {{$portfolio->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                <div class="text-center py-2">
                    <img src="{{$portfolio->photo ? asset('images/'.$portfolio->photo->path) : 'http://placehold.it/400x400'}}" height="200" class="img-profile border-bottom-info">
                </div>
                {!! Form::model($portfolio, ['method'=>'PATCH' , 'action'=>['Admin\PortfolioController@update', $portfolio->id], 'files' => 'true']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Title') !!}
                    {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Title..' ])!!}
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
                    {!! Form::select('tipe', array('0' => 'Website',
                                            '1' => 'Mobile Application',
                                            '2' => 'Design'), null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Portfolio', ['class'=>'btn btn-primary']) !!}
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