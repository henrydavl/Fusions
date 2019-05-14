@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Web Project -
                    #WEB{{str_pad($web->id, 4, '0', STR_PAD_LEFT)}}</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend>Project Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #WEB{{str_pad($web->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Theme Reference</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$web->themeRef}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Color</h6>
                        </div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorPrimary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorPrimary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorSecondary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorSecondary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$web->color->colorTertiary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$web->color->colorTertiary}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$web->penjelasan}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->status == 0) Idle @elseif($web->status == 1) Ongoing @else Maintenance @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Deadline</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->deadline == null) - @else {{\Carbon\Carbon::parse($web->deadline)->format('d F Y')}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Hosting</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->hosting_id == null) - @else #HOS{{str_pad($web->hosting_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Domain</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->domain_id == null) - @else #DOM{{str_pad($web->domain_id, 3, '0', STR_PAD_LEFT)}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ZIP Data</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->zipData == null) -
                                @else
                                    {{$web->zipData}}
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('web.edit', $web->id) }}" class="btn btn-primary">Edit Project</a>
                            @if($web->zipData != null)
                                <a href="" class="btn btn-success">Download ZIP</a>
                            @endif
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Order Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Pay Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->pesanan->statusBayar == 0) NOT YET PAID @else PAID @endif
                        </div>
                    </div>
                    @if($web->pesanan->statusBayar == 1)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Transfer Photo</h6>
                            </div>
                            <div class="col-md-9">
                                : <img src="{{asset('receipt/'.$web->pesanan->buktiTransfer)}}" height="200">
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Accept Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->pesanan->statusTerima == 0) NOT YET CONFIRMED @elseif($web->pesanan->statusTerima == 1) REJECTED @else ACCEPTED @endif
                        </div>
                    </div>
                    @if($web->pesanan->statusTerima == 2)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Accept Time</h6>
                            </div>
                            <div class="col-md-9">
                                : {{$web->pesanan->waktuTerima}}
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Project Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($web->pesanan->deleted_at == null) ONLINE @else DELETED @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="" class="btn btn-primary">See Transaction Photo</a>
                          @if($web->pesanan->statusTerima == 0) {{--maintenance dan finish ada di edit.blade.php--}}
                                <a href="{{ route('project.acdc', ['tipe'=>'web', 'id'=>$web->id, 'acdc'=>'accept']) }}" class="btn btn-success">Accept Project</a>
                                <a href="{{ route('project.acdc', ['tipe'=>'web', 'id'=>$web->id, 'acdc'=>'reject']) }}" class="btn btn-danger">Reject Project</a>
                            @elseif($web->pesanan->statusTerima != 0)
                                <a href="{{ route('project.acdc', ['tipe'=>'web', 'id'=>$web->id, 'acdc'=>'delete']) }}" class="btn btn-danger">Delete</a>
                            @endif
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Package Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            Package ID
                        </div>
                        <div class="col-md-9">
                            : #PWB{{str_pad($web->pesanan->paket->kodePaket->id, 3, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Package Name
                        </div>
                        <div class="col-md-9">
                            : {{$web->pesanan->paket->kodePaket->nama}}
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection