<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Portfolio List</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($portfolios) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Updated at</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr class="text-center">
                            <td>{{$portfolio->id}}</td>
                            <td><img class="img-profile" src="{{$portfolio->photo ? asset('images/'.$portfolio->photo->path) : 'http://placehold.it/400x400'}}" height="45"></td>
                            <td>{{ucwords($portfolio->nama)}}</td>
                            <td><a type="button" class="text-primary" data-toggle="modal"
                                   data-target="#descriptionModal-{{$portfolio->id}}">Read</a>
                                @include('inc.description_modal')
                            </td>
                            <td>{{$portfolio->tipe == 0 ? "Website" : ($portfolio->tipe == 1 ? "Mobile Application" : "Design")}}</td>
                            <td>{{$portfolio->updated_at->diffForhumans()}}</td>
                            <td>{{$portfolio->created_at->diffForhumans()}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-circle" title="Edit" data-toggle="modal"
                                                data-target="#editModal-{{$portfolio->id}}"><i class="fas fa-edit"></i></button>
                                        @include('admin.portfolio.edit_modal')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\PortfolioController@destroy', $portfolio->id], 'title' => 'Edit Portfolio']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Portfolio']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{$portfolios->links()}}
                </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>