@extends('layout.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Design Project -
                    #DES{{str_pad($des->id, 4, '0', STR_PAD_LEFT)}}</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend>Project Details</legend>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ID</h6>
                        </div>
                        <div class="col-md-9">
                            : #DES{{str_pad($des->id, 4, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Project Name</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$des->nama}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Description</h6>
                        </div>
                        <div class="col-md-9">
                            : {{$des->penjelasan}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Color</h6>
                        </div>
                        <div class="col-md-2"
                             style="background-color: {{$des->color->colorPrimary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$des->color->colorPrimary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$des->color->colorSecondary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$des->color->colorSecondary}}</div>
                        <div class="col-md-2"
                             style="background-color: {{$des->color->colorTertiary}}; height: 25px;"></div>
                        <div class="col-md-1">{{$des->color->colorTertiary}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Deadline</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($des->deadline == null) - @else {{$des->deadline}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ZIP Data</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($des->zipData == null) -
                            @else
                                {{$des->zipData}}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('web.edit', $des->id) }}" class="btn btn-primary">Edit Project</a>
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
                            : @if($des->pesanan->statusBayar == 0) NOT YET PAID @else PAID @endif
                        </div>
                    </div>
                    @if($des->pesanan->statusBayar == 1)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Transfer Photo</h6>
                            </div>
                            <div class="col-md-9">
                                : <img src="{{ $des->pesanan->buktiTransfer }}" alt="">
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Accept Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($des->pesanan->statusTerima == 0) NOT YET CONFIRMED @elseif($des->pesanan->statusTerima == 1) REJECTED @else ACCEPTED @endif
                        </div>
                    </div>
                    @if($des->pesanan->statusTerima == 2)
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Accept Time</h6>
                            </div>
                            <div class="col-md-9">
                                : {{$wen->pesanan->waktuTerima}}
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Project Status</h6>
                        </div>
                        <div class="col-md-9">
                            : @if($des->pesanan->deleted_at == null) ONLINE @else DELETED @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="" class="btn btn-primary">See Transaction Photo</a>
                            @if($des->pesanan->statusTerima == 0)
                            <a href="{{ route('project.acdc', ['tipe'=>'design', 'id'=>$des->id, 'acdc'=>'accept']) }}" class="btn btn-success">Accept Project</a>
                            <a href="{{ route('project.acdc', ['tipe'=>'design', 'id'=>$des->id, 'acdc'=>'reject']) }}" class="btn btn-danger">Reject Project</a>
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
                            : #PDS{{str_pad($des->pesanan->paket->kodePaket->id, 3, '0', STR_PAD_LEFT)}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Package Category
                        </div>
                        <div class="col-md-9">
                            : {{$des->pesanan->paket->kodePaket->catdesain->category}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Package Type
                        </div>
                        <div class="col-md-9">
                            : {{$des->pesanan->paket->kodePaket->tipedesain->tipe}}
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection