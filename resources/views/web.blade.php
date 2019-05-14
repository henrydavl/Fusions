@extends('layout.pages')
@section('content')
    <div class="container webprice">
        <h1 class="text-center bus">Company Profile Packages</h1>
        <div class="row">
            @if($companies)
                @foreach($companies as $paket)
            <div class="col-md-4 compro1">
                <div class="pricingTable {{$paket->nama == "Farmer" ? "purple" : "green"}}">
                    <div class="pricingTable-header">
                        <h3>{{$paket->nama}}</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>Rp. {{number_format($paket->harga, 0, '', '.')}},-</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>@if($paket->freeHosting == 1) <s>Free Hosting</s> @else Free Hosting @endif</li>
                            <li>@if($paket->freeDomain == 1) <s>Free Domain</s> @else Free Domain @endif</li>
                            <li>@if($paket->freeSubdomain == 0) No Subdomain @elseif($paket->freeSubdomain == 1)1 Subdomain @else {{$paket->freeSubdomain}} Subdomains @endif</li>
                            <li>up to {{$paket->pages}} Pages</li>
                            <li>{{$paket->seo}} Key Words</li>
                            <li>{{$paket->duration}} Days of Work</li>
                            <li>@if($paket->freeEditPage == 1)1 Free Update Existing Page @else {{$paket->freeEditPage}} Free Update Existing Pages @endif</li>
                            <li>@if($paket->responsive == 1) <s>Responsive Design</s> @else Responsive Design @endif</li>
                            <li>@if($paket->ftp == 1) <s>FTP Access</s> @else FTP Access @endif</li>
                            <li>@if($paket->slideshow == 1) <s>Slideshow Header</s> @else Slideshow Header @endif</li>
                            <li>@if($paket->cms == 1) <s>Content Management System</s> @else Content Management System @endif</li>
                            <li>@if($paket->ssl == 1) <s>SSL Security</s> @else SSL Security @endif</li>
                            <li>@if($paket->login == 1) <s>Login &amp; Registration System</s> @else Login &amp; Registration System @endif</li>
                            <li>@if($paket->siteSearch == 1) <s>Search Feature</s> @else Search Feature @endif</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up">
                        {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@web']) !!}
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
        <div class="row">
            @if($companies)
                @foreach($bus as $paket)
            <div class="col-md-4">
                <div class="pricingTable {{$paket->nama == "Poets" ? "purple" : ($paket->nama == "Merchant" ? "green" : "yellow")}}">
                    <div class="pricingTable-header">
                        <h3>{{$paket->nama}}</h3>
                    </div>
                    <div class="pricing-plans"><span class="price-value"><span>Rp. {{number_format($paket->harga, 0, '', '.')}},-</span></span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li>@if($paket->freeHosting == 1) <s>Free Hosting</s> @else Free Hosting @endif</li>
                            <li>@if($paket->freeDomain == 1) <s>Free Domain</s> @else Free Domain @endif</li>
                            <li>@if($paket->freeSubdomain == 0) No Subdomain @elseif($paket->freeSubdomain == 1)1 Subdomain @else {{$paket->freeSubdomain}} Subdomains @endif</li>
                            <li>up to {{$paket->pages}} Pages</li>
                            <li>{{$paket->seo}} Key Words</li>
                            <li>{{$paket->duration}} Days of Work</li>
                            <li>@if($paket->freeEditPage == 1)1 Free Update Existing Page @else {{$paket->freeEditPage}} Free Update Existing Pages @endif</li>
                            <li>@if($paket->responsive == 1) <s>Responsive Design</s> @else Responsive Design @endif</li>
                            <li>@if($paket->ftp == 1) <s>FTP Access</s> @else FTP Access @endif</li>
                            <li>@if($paket->slideshow == 1) <s>Slideshow Header</s> @else Slideshow Header @endif</li>
                            <li>@if($paket->cms == 1) <s>Content Management System</s> @else Content Management System @endif</li>
                            <li>@if($paket->ssl == 1) <s>SSL Security</s> @else SSL Security @endif</li>
                            <li>@if($paket->login == 1) <s>Login &amp; Registration System</s> @else Login &amp; Registration System @endif</li>
                            <li>@if($paket->siteSearch == 1) <s>Search Feature</s> @else Search Feature @endif</li>
                        </ul>
                    </div>
                    <div class="pricingTable-sign-up">
                        {!! Form::open(['method'=>'POST', 'action'=> 'CheckoutController@web']) !!}
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