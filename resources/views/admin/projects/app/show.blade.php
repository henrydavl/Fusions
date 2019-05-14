@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">App Project -
                    #APP{{str_pad($app->id, 4, '0', STR_PAD_LEFT)}}</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend>Project Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #APP{{str_pad($app->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Project Name</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$app->nama}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Theme Reference</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$app->themeRef}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Color</h6>
                        </div>
                        <div class="col-md-2"
                             style="background-color: {{$app->color->colorPrimary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$app->color->colorPrimary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$app->color->colorSecondary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$app->color->colorSecondary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$app->color->colorTertiary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$app->color->colorTertiary}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$app->penjelasan}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->status == 0) Idle @elseif($app->status == 1) Ongoing @else Maintenance @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Deadline</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->deadline == null) - @else {{\Carbon\Carbon::parse($app->deadline)->format('d F Y')}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ZIP Data</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->zipData == null) -
                            @else
                                {{$app->zipData}}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('app.edit', $app->id) }}" class="btn btn-primary">Edit Project</a>
                        </div>
                    </div>
                </fieldset>
                @if($app->proyekWeb_id != null)
                <fieldset>
                    <legend>Project Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #WEB{{str_pad($app->proyekWeb->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->proyekWeb->status == 0) Idle @elseif($app->proyekWeb->status == 1) Ongoing @else Maintenance @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('web.show', $app->proyekWeb->id) }}" class="btn btn-primary">See Web Project</a>
                        </div>
                    </div>
                </fieldset>
                @endif
                <fieldset>
                    <legend>Order Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Pay Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->pesanan->statusBayar == 0) NOT YET PAID @else PAID @endif
                        </div>
                    </div>
                    @if($app->pesanan->statusBayar == 1)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Transfer Photo</h6>
                            </div>
                            <div class="col-md-9">
                                : <img src="{{asset('receipt/'.$app->pesanan->buktiTransfer)}}" height="200">
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Accept Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->pesanan->statusTerima == 0) NOT YET CONFIRMED @elseif($app->pesanan->statusTerima == 1) REJECTED @else ACCEPTED @endif
                        </div>
                    </div>
                    @if($app->pesanan->statusTerima == 2)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Accept Time</h6>
                            </div>
                            <div class="col-md-9">
                                : {{$app->pesanan->waktuTerima}}
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Project Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($app->pesanan->deleted_at == null) ONLINE @else DELETED @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="" class="btn btn-primary">See Transaction Photo</a>
                            @if($app->pesanan->statusTerima == 0)
                                <a href="{{ route('project.acdc', ['tipe'=>'app', 'id'=>$app->id, 'acdc'=>'accept']) }}" class="btn btn-success">Accept Project</a>
                                <a href="{{ route('project.acdc', ['tipe'=>'app', 'id'=>$app->id, 'acdc'=>'reject']) }}" class="btn btn-danger">Reject Project</a>
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
                            : #PAP{{str_pad($app->pesanan->paket->kodePaket->id, 3, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Package Name
                        </div>
                        <div class="col-md-9">
                            : {{$app->pesanan->paket->kodePaket->nama}}
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection