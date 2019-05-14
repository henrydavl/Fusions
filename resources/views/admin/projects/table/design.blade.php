<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Design Projects</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($dess) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Design Category</th>
                        <th>Design Type</th>
                        <th>Ordered on</th>
                        <th>Ordered by</th>
                        <th>Status</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dess as $des)
                        <tr class="text-center">
                            <td>#DES{{str_pad($des->id, 4, '0', STR_PAD_LEFT)}}</td>
                            <td>{{$des->pesanan->paket->kodePaket->catdesain->category}}</td>
                            <td>{{$des->pesanan->paket->kodePaket->tipedesain->tipe}}</td>
                            <td>{{\Carbon\Carbon::parse($des->pesanan->waktuTerima)->format('d F Y')}}</td>
                            <td>{{$des->pesanan->user->name}}</td>
                            <td>@if($des->status == 0) Idle @elseif($des->status == 1) Ongoing @else Maintenance @endif</td>
                            <td>@if($des->deadline == null) - @else {{$des->deadline}} @endif</td>
                            <td width="100px"><div class="row no-gutters">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <a href="{{ route('design.show', $des->id) }}" class="btn btn-warning btn-circle"><i class="fas fa-search"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{$dess->links()}}
                </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Project</h1>
            @endif
        </div>
    </div>
</div>