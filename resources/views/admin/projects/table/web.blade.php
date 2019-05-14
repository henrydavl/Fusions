<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Web Projects</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($webs) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Package Type</th>
                        <th>Ordered on</th>
                        <th>Ordered by</th>
                        <th>Status</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($webs as $web)
                        <tr class="text-center">
                            <td>#WEB{{str_pad($web->id, 4, '0', STR_PAD_LEFT)}}</td>
                            <td>{{$web->pesanan->paket->kodePaket->nama}}</td>
                            <td>{{\Carbon\Carbon::parse($web->pesanan->waktuTerima)->format('d F Y')}}</td>
                            <td>{{$web->pesanan->user->name}}</td>
                            <td>@if($web->status == 0) Idle @elseif($web->status == 1) Ongoing @else Maintenance @endif</td>
                            <td>@if($web->deadline == null) - @else {{\Carbon\Carbon::parse($web->deadline)->format('d F Y')}} @endif</td>
                            <td width="100px"><div class="row no-gutters">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <a href="{{ route('web.show', $web->id) }}" class="btn btn-warning btn-circle"><i class="fas fa-search"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{$webs->links()}}
                </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Project</h1>
            @endif
        </div>
    </div>
</div>