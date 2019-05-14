@extends('layout.pages')
@section('content')
    <div class="container webprice">
        <h1 class="text-center bus">Company Profile Packages</h1>
        <div class="row">
            @if($comps)
                @foreach($comps as $paket)
            <div class="col-sm-4">
                <div class="pricingTable @if($paket->id % 3 == 1) purple @elseif($paket->id % 3 == 2) green @else yellow @endif">
                    <div class="pricingTable-header">
                        <h3>{{$paket->nama}}</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>Rp. {{number_format($paket->harga, 0, '', '.')}},-</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>Up to {{ $paket->pages }} Pages</li>
                            <li>{{$paket->duration}} Days of Work</li>
                            <li>@if($paket->publish == 1) <s>Publish to Google Play</s> @else Publish to Google Play @endif</li>
                            <li>@if($paket->play_id == null) No Google Play Support @else Get {{$paket->play->nama}} Play Package @endif</li>
                            <li>@if($paket->connectivity == 1) Offline App @else Online App @endif</li>
                            <li>@if($paket->freeEditPage == 1)1 Free Update Existing Page @else {{$paket->freeEditPage}} Free Update Existing Pages @endif</li>
                            <li>Responsive Design</li>
                            <li>@if($paket->storage == 1) No Storage @elseif($paket->storage == 2) Using Phone Storage @else Using Cloud Storage @endif</li>
                            <li>@if($paket->offline == 1) <s>Store Offline Data</s> @else Store Offline Data @endif</li>
                            <li>@if($paket->online == 1) <s>Store Online Data</s> @else Store Online Data @endif</li>
                            <li>@if($paket->admin == 1) <s>Admin Page</s> @else Admin Page @endif</li>
                            <li>Support @if($paket->language == 1) 1 Language @else {{$paket->language}} Languages @endif</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up">
                        {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@app']) !!}
                        {{ csrf_field() }}
                        {!! Form::hidden('id', $paket->id) !!}
                        {!! Form::button('Order Now', ['type'=>'submit', 'class'=>'btn btn-block', 'title'=>'Activate User']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
        <h1 class="text-center bus">Business Packages</h1>
        <div class="row bus">
            @if($bus)
                @foreach($bus as $paket)
                    <div class="col-sm-4">
                        <div class="pricingTable @if($paket->id % 3 == 1) purple @elseif($paket->id % 3 == 2) green @else yellow @endif">
                            <div class="pricingTable-header">
                                <h3>{{$paket->nama}}</h3>
                            </div>
                            <div class="pricing-plans"><span class="price-value"><i class="fa fa-usd"></i><span>Rp. {{number_format($paket->harga, 0, '', '.')}},-</span></span>
                            </div>
                            <div class="pricingContent">
                                <ul>
                                    <li>Up to {{ $paket->pages }} Pages</li>
                                    <li>{{$paket->duration}} Days of Work</li>
                                    <li>@if($paket->publish == 1) <s>Publish to Google Play</s> @else Publish to Google Play @endif</li>
                                    <li>@if($paket->play_id == null) No Google Play Support @else Get {{$paket->play->nama}} Play Package @endif</li>
                                    <li>@if($paket->connectivity == 1) Offline App @else Online App @endif</li>
                                    <li>@if($paket->freeEditPage == 1)1 Free Update Existing Page @else {{$paket->freeEditPage}} Free Update Existing Pages @endif</li>
                                    <li>Responsive Design</li>
                                    <li>@if($paket->storage == 1) No Storage @elseif($paket->storage == 2) Using Phone Storage @else Using Cloud Storage @endif</li>
                                    <li>@if($paket->offline == 1) <s>Store Offline Data</s> @else Store Offline Data @endif</li>
                                    <li>@if($paket->online == 1) <s>Store Online Data</s> @else Store Online Data @endif</li>
                                    <li>@if($paket->admin == 1) <s>Admin Page</s> @else Admin Page @endif</li>
                                    <li>Support @if($paket->language == 1) 1 Language @else {{$paket->language}} Languages @endif</li>
                                </ul>
                            </div>
                            <div class="pricingTable-sign-up">
                                {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@app']) !!}
                                {{ csrf_field() }}
                                {!! Form::hidden('id', $paket->id) !!}
                                {!! Form::button('Order Now', ['type'=>'submit', 'class'=>'btn btn-block', 'title'=>'Activate User']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection