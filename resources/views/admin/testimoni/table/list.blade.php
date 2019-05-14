<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Customers Review and Testimoni</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($reviews) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Posted By</th>
                        <th>Activity - Website</th>
                        <th>Comments</th>
                        <th>Price Rating</th>
                        <th>Support Rating</th>
                        <th>Features Rating</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $review)
                        <tr class="text-center">
                            <td>{{$review->id}}</td>
                            <td>{{$review->user->name}}</td>
                            <td>{{$review->activity}}</td>
                            <td><a type="button" class="text-primary" data-toggle="modal"
                                   data-target="#commentModal-{{$review->id}}">Read</a></td>
                            @include('admin.testimoni.comment_modal')
                            <td>{{$review->price}} <i class="fas fa-star" style="color: purple;"></i></td>
                            <td>{{$review->support}} <i class="fas fa-star" style="color: purple;"></i></td>
                            <td>{{$review->fitur}} <i class="fas fa-star" style="color: purple;"></i></td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-12">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\TestimoniController@destroy', $review->id], 'id' => 'delete-user']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Review']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{$reviews->links()}}
                </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>