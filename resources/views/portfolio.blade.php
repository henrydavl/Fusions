@extends('layout.pages')
@section('content')
    <section id="header">
        <div class="container portline">
            <h1 class="porttagline">We render your ideas to&nbsp;<span class="perfect"><strong>perfection.&nbsp;</strong><br></span></h1>
            <h2 class="portfolios">Our Portfolio</h2>
        </div>
    </section>
    <section id="content">
        <div class="container" id="design">
            <hr class="line3">
            <h1>Graphic Design</h1>
            <div class="row no-gutters rowinside">
                @if($des)
                    @foreach($des as $design)
                <div class="col-md-4 pb-4">
                    <div class="inside"><img class="img-fluid" src="{{asset('images/'.$design->photo->path)}}"></div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container" id="web">
            <hr class="line03">
            <h1 class="webhead">Website Development</h1>
            <div class="row no-gutters rowinside">
                @if($web)
                    @foreach($web as $website)
                        <div class="col-md-4 pb-4">
                            <div class="inside"><img class="img-fluid" src="{{asset('images/'.$website->photo->path)}}"></div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container" id="app">
            <hr class="line3">
            <h1>Mobile Apps</h1>
            <div class="row no-gutters rowinside">
                @if($app)
                    @foreach($app as $apps)
                        <div class="col-md-4 pb-4">
                            <div class="inside"><img class="img-fluid" src="{{asset('images/'.$apps->photo->path)}}"></div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container">
            <h1>Our Clients</h1>
            <div class="row no-gutters brands">
                <div class="col"><a href="#"> <img src="assets/img/instacart.png"><img src="assets/img/kickstarter.png"><img src="assets/img/lyft.png"><img src="assets/img/shopify.png"><img src="assets/img/pinterest.png"><img src="assets/img/twitter.png"></a></div>
            </div>
        </div>
    </section>
@endsection