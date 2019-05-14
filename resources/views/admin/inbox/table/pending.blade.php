<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Pending</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($inboxes) > 0)
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($inboxes as $inbox)
                        <tr class="text-center">
                            <td>{{$inbox->id}}</td>
                            <td>{{ucwords($inbox->name)}}</td>
                            <td>{{$inbox->email}}</td>
                            <td>{{$inbox->body}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-success btn-circle" title="Reply" data-toggle="modal"
                                                data-target="#replyModal-{{$inbox->id}}"><i class="fas fa-reply"></i></button>
                                        @include('inc.reply_email')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\InboxController@destroy', $inbox->id]]) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Reject']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-right">
                {{$inboxes->links()}}
            </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>