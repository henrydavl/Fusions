<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Payment Method</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($pays) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Bank Name</th>
                        <th>Account Number</th>
                        <th>Owner</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pays as $pay)
                        <tr class="text-center">
                            <td>{{$pay->namaBank}}</td>
                            <td>{{$pay->nomorRekening}}</td>
                            <td>{{$pay->atasNama}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <a href="{{ route('payment.edit', $pay->id) }}" class="btn btn-circle btn-info"><i class="fa fa-edit"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['User\PaymentController@destroy', $pay->id], 'id' => 'delete-user']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Payment']) !!}
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