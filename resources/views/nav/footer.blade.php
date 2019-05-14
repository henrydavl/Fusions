<footer class="footer">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-4 offset-xl-1">
                <div>
                    <div class="row no-gutters">
                        <div class="col-md-12 formm">
                            <hr class="line3">
                            <h1 class="don">Don't miss a word from us!</h1>
                        </div>
                    </div>
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\NewsletterController@store']) !!}
                    @csrf
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your email...', 'autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12 subss">
                            <div class="containerlink">
                                {!! Form::submit('Subscribe!', ['class'=>'subs', 'style'=>'padding-bottom: 1rem;']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-4 offset-xl-3">
                <div class="row no-gutters">
                    <div class="col-md-12 logo"><img class="img-fluid fus" src="{{asset('assets/img/Group%202.png')}}"></div>
                </div>
                <div class="row no-gutters carr">
                    <div class="col">
                        <div class="carpro">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <p>Phone +6285880388900<br></p>
                                    <div><i class="fa fa-instagram iconn"></i><i class="fa fa-facebook-square iconn"></i><i class="fa fa-dribbble iconn"></i></div>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="career">Career</h4>
                                    <ul class="list-unstyled">
                                        <li>Design</li>
                                        <li>Front-end</li>
                                        <li>Back-end</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="career">Projects</h4>
                                    <ul class="list-unstyled">
                                        <li>Branding</li>
                                        <li>Website</li>
                                        <li>Mobile App</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cp">
        <div class="row no-gutters">
            <div class="col">
                <p><i class="fa fa-copyright"></i>&nbsp;Copyright Fusionsvisual.com {{\Carbon\Carbon::now()->year}}<br></p>
            </div>
        </div>
    </div>
</footer>