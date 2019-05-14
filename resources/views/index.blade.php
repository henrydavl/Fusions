<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FusionsVisual | Where Technology and Design Sync!</title>
    <link rel="icon" type="image/png" sizes="462x454" href="{{asset('assets/img/Group.png')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="{{asset('assets/css/Pricing-Table-Style-01-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    @guest
        <style>
            .links {
                margin-top: 0.5em;
                color: white;
                border-bottom: 2px solid transparent;
            }
        </style>
    @endguest
</head>

<body>
    <section class="top head">
        @include('nav.nav')
        @include('inc.logout_modal')
        <div class="container header">
            @include('inc.alert')
            <div class="row no-gutters slogan">
                <div class="col">
                    <h1 data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="tagline">Where Technology and Design sync</h1>
                    <p data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="desc">An independent digital creative business focuses on Solving problems through Visual which we believe is very important to <br>Build a strong Identity to each and any field of businesses, especially digital products.<br></p>
                </div>
            </div>
            <div class="row no-gutters products">
                <div class="col-md-2 dess">
                    <a href="{{ route('web') }}">
                        <div data-aos="fade" data-aos-delay="750" data-aos-once="true" class="des">
                            <p>Website</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 webaa">
                    <a href="{{ route('mobile') }}">
                        <div data-aos="fade" data-aos-delay="950" data-aos-once="true" class="weba">
                            <p>Mobile Application</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row no-gutters products2">
                <div class="col-md-4 offset-xl-4 design"><a href="#workflow"><i class="icon ion-ios-arrow-down downn"></i></a></div>
            </div>
        </div>
    </section>
    <section id="workflow">
        <div class="container">
            <div class="row no-gutters workflow">
                <div class="col-md-12 slogan">
                    <hr data-aos="fade-left" data-aos-delay="300" data-aos-once="true" class="line1">
                    <h1 data-aos="fade-right" data-aos-delay="600" data-aos-once="true" class="tagline2">Best Workflow for our Clients</h1>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div data-aos="fade-up" data-aos-delay="800" data-aos-once="true" class="meet"><img class="img-fluid taking" src="assets/img/talking.png" width="100">
                        <h4 class="mc">Meet Clients</h4>
                        <p class="mcd">Turn your ideas into reality<br>with us.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div data-aos="fade-up" data-aos-delay="1000" data-aos-once="true" class="meet"><img class="img-fluid taking" src="assets/img/drawing.png" width="100">
                        <h4 class="imagine">Imagine &amp; Sketch!</h4>
                        <p class="mcd">We simplify, we start over,<br>we perfect you ideas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div data-aos="fade-up" data-aos-delay="1200" data-aos-once="true" class="meet"><img class="img-fluid taking" src="assets/img/man-working-on-a-laptop-from-side-view.png" width="100">
                        <h4 class="develop">Digitalize &amp; Develop</h4>
                        <p class="mcd">We are focusing to meet<br>your wildest expectations.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container project">
            <div class="row no-gutters">
                <div class="col-md-6 ten">
                    <div class="row no-gutters pro" data-aos="fade-right" data-aos-delay="1350" data-aos-once="true">
                        <div class="col-md-4 proo">
                            <h1 class="jects">{{$pes}}</h1>
                            <p class="ject">Projects</p>
                        </div>
                        <div class="col-md-4 proo">
                            <h1 class="jects">6</h1>
                            <p class="ject">Happy Clients</p>
                        </div>
                        <div class="col-md-4 proo">
                            <h1 class="jects">5</h1>
                            <p class="ject">Happy members</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 more">
                    <hr data-aos="fade-left" data-aos-delay="1450" data-aos-once="true" class="line2">
                    <h1 data-aos="fade-left" data-aos-delay="1550" data-aos-once="true" class="tagline3">More Clients, More Experience</h1>
                    <p data-aos="fade-up" data-aos-delay="1600" data-aos-once="true">Evolving with You!</p>
                </div>
            </div>
        </div>
    </section>
    @if(count($reviews) > 0)
    <section class="testimoni">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 test">
                    <h1>Our Customers Testimonial</h1>
                    <p>Top {{count($reviews)}} Rating based on {{$cust}} customers review.&nbsp;<a href="{{ route('review.index') }}">Show More</a>
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($reviews as $review)
                <div class="col-md-4 py-3">
                    <div>
                        <div class="col-md-12 review">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <p class="contentreview">{{$review->comments}}</p><br>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4 imgrev"><img class="rounded-circle img-fluid" src="{{asset('images/'.$review->user->photo->path)}}" width="150"></div>
                                <div class="col-md-8">
                                    <div class="inforev">
                                        <h3 class="namerev">{{$review->user->name}}</h3>
                                        <p class="comrev">{{$review->activity}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @include('nav.footer')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-animation.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>