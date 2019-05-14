<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Frequent Asked Question</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($faq) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Question and Answer</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faq as $fa)
                        <tr class="text-center">
                            <td>{{$fa->id}}</td>
                            <td>
                                <b>Q : {{$fa->question}}</b><br>
                                A : {{$fa->answer}}
                            </td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <a href="{{ route('faq.edit', $fa->id) }}" class="btn btn-circle btn-warning"><i class="fas fa-search"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\FaqController@destroy', $fa->id], 'id' => 'delete-user']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete User']) !!}
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