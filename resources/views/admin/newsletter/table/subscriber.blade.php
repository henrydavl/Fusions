<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Subscriber List</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($subs) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Email</th>
                        <th>Subscribe since</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subs as $sub)
                        <tr class="text-center">
                            <td>{{$sub->id}}</td>
                            <td>{{$sub->email}}</td>
                            <td>{{$sub->created_at->diffForHumans()}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\NewsletterController@destroy', $sub->id], 'id' => 'delete-user']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Subscriber']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>