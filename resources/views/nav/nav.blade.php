<nav class="navbar navbar-dark navbar-expand-md sticky-top better-bootstrap-nav-left">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img class="img-fluid" src="assets/img/fusionpurplehaha.svg">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav d-xl-flex mx-auto">
{{--                @guest--}}
                <li class="nav-item dropdown link">
                    <a class="dropdown-toggle nav-link links" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-tags"></i>&nbsp;Products&nbsp;</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="{{ route('meet-us') }}">Design</a>
                        <a class="dropdown-item" role="presentation" href="{{ route('web') }}">Website</a>
                        <a class="dropdown-item" role="presentation" href="{{ route('mobile') }}">Mobile Apps</a>
                    </div>
                </li>
                    <li class="nav-item link" role="presentation"><a class="nav-link links"
                                                                     href="{{ route('portfolio') }}"><i
                                    class="far fa-images"></i>&nbsp;Portfolio</a></li>
                    <li class="nav-item link" role="presentation"><a class="nav-link links"
                                                                     href="{{ route('meet-us') }}"><i
                                    class="fas fa-user-clock"></i>&nbsp;Meet Us</a></li>
                    <li class="nav-item link" role="presentation"><a class="nav-link links"
                                                                     href="{{ route('contact-us') }}"><i
                                    class="fa fa-phone"></i>&nbsp;Contact Us</a></li>
                @guest
                <li class="nav-item link" role="presentation">
                    <a class="nav-link" href="{{ route('login') }}">
                        <div class="log">
                            <p>Log In&nbsp;<i class="fa fa-sign-in"></i></p>
                        </div>
                    </a>
                </li>
                <li class="nav-item link" role="presentation">
                    <a class="nav-link" href="{{ route('register') }}">
                        <div class="sign">
                            <p><i class="fas fa-user-plus"></i>&nbsp;Sign Up</p>
                        </div>
                    </a>
                </li>
                @endguest
            </ul>
            @if(\Illuminate\Support\Facades\Auth::user())
            <ul class="nav navbar-nav d-xl-flex">
                <li class="nav-item link" role="presentation">
                    <a class="btn btn-outline-light"
                       @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1) href="{{route('admin')}}"
                       @else href="{{route('user')}}" @endif><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="btn btn-danger ml-auto"  href="#" data-toggle="modal" data-target="#logoutModal">Logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>