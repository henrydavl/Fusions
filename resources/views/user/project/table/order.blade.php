<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">{{ $tipe }} Orders</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($pes) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Package Type</th>
                        <th>Ordered on</th>
                        @if($tipe == 'Android Application')
                            <th>App Name</th>
                        @endif
                        <th>Status</th>
                        <th>Deadline</th>
                        <th>Zip Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pes as $pe)
                        <tr class="text-center">
                            <td>{{$pe->paket->kodePaket->nama}}</td>
                            <td>{{\Carbon\Carbon::parse($pe->waktuTerima)->format('d F Y')}}</td>
                            @if($tipe == 'Android Application')
                                <td>{{$pe->proyekApp->nama}}</td>
                            @endif
                            <td>
                                @if($tipe == 'Website')
                                    @if($pe->proyekWeb->status == 0) Idle @elseif($pe->proyekWeb->status == 1) Ongoing @else Maintenance @endif
                                @elseif($tipe == 'Android Application')
                                    @if($pe->proyekApp->status == 0) Idle @elseif($pe->proyekApp->status == 1) Ongoing @else Maintenance @endif
                                @else
                                    @if($pe->proyekDes->status == 0) Idle @elseif($pe->proyekDes->status == 1) Ongoing @else Maintenance @endif
                                @endif
                            </td>
                            <td>
                                @if($tipe == 'Website')
                                    @if($pe->proyekWeb->deadline == null) - @else {{\Carbon\Carbon::parse($pe->proyekWeb->deadline)->format('d F Y')}} @endif
                                @elseif($tipe == 'Android Application')
                                    @if($pe->proyekApp->deadline == null) - @else {{\Carbon\Carbon::parse($pe->proyekApp->deadline)->format('d F Y')}} @endif
                                @else
                                    @if($pe->proyekDes->deadline == null) - @else {{$pe->proyekDes->deadline}} @endif
                                @endif
                            </td>
                            <td>
                                @if($tipe == 'Website')
                                    @if($pe->proyekWeb->zipData == null) - @else {{$pe->proyekWeb->zipData}} @endif
                                @elseif($tipe == 'Android Application')
                                    @if($pe->proyekApp->zipData == null) - @else {{$pe->proyekApp->zipData}} @endif
                                @else
                                    @if($pe->proyekDes->zipData == null) - @else {{$pe->proyekDes->zipData}} @endif
                                @endif
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