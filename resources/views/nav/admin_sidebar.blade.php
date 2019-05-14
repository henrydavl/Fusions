<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <div class="sidebar-heading">
        <a href="{{route('index')}}"><img src="{{asset('admin/img/Group2.png')}}" class="img-fluid" style="margin: 1em;"></a>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @if($pages=='dash') active @endif"><a class="nav-link" href="{{route('admin')}}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item @if($pages=='proj') active @endif"><a class="nav-link" href="{{ route('project.index') }}"><i class="fas fa-fw fa-tasks"></i><span>Projects</span></a></li>
    {{--<li class="nav-item @if($pages=='mhome' || $pages=='mport' || $pages=='mMeet' || $pages=='mcont' || $pages=='mabout') active @endif">--}}
        {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">--}}
            {{--<i class="fas fa-fw fa-file-alt"></i><span>Manage Page</span>--}}
        {{--</a>--}}
        {{--<div id="collapseTwo" class="collapse @if($pages=='mhome' || $pages=='mport' || $pages=='mMeet' || $pages=='mcont' || $pages=='mabout') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item @if($pages=='mhome') active @endif" href="{{ route('page.index', 'home') }}">Home</a>--}}
                {{--<a class="collapse-item @if($pages=='mport') active @endif" href="{{ route('page.index', 'portfolio') }}">Portfolio</a>--}}
                {{--<a class="collapse-item @if($pages=='mMeet') active @endif" href="{{ route('page.index', 'meet-us') }}">Meet Us</a>--}}
                {{--<a class="collapse-item @if($pages=='mcont') active @endif" href="{{ route('page.index', 'contact-us') }}">Contact Us</a>--}}
                {{--<a class="collapse-item @if($pages=='mabout') active @endif" href="{{ route('page.index', 'about-us') }}">About Us</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}
    <li class="nav-item @if($pages=='ulist' || $pages=='uadd') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-cog"></i><span>Manage User</span>
        </a>
        <div id="collapseUtilities" class="collapse @if($pages=='ulist' || $pages=='uadd') show @endif" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='ulist') active @endif" href="{{ route('user.index') }}">User List</a>
                <a class="collapse-item @if($pages=='uadd') active @endif" href="{{ route('user.create') }}" >Add User</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if($pages=='medlist' || $pages=='upload') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-images"></i><span>Manage Portfolio</span>
        </a>
        <div id="collapseMedia" class="collapse @if($pages=='medlist' || $pages=='upload') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='medlist') active @endif" href="{{ route('portfolio.index') }}">Portfolio List</a>
                <a class="collapse-item @if($pages=='upload') active @endif" href="{{ route('portfolio.create') }}">Upload</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if($pages=='mreq') active @endif"><a class="nav-link" href="{{ route('request.index') }}"><i class="fas fa-fw fa-comments-dollar"></i><span>Meet Request</span></a></li>
    <li class="nav-item @if($pages=='inbox') active @endif"><a class="nav-link" href="{{ route('inbox.index') }}"><i class="fas fa-fw fa-envelope"></i><span>Inbox</span></a></li>
    <li class="nav-item @if($pages=='sublist' || $pages=='sendm') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-envelope-open"></i><span>Newsletter</span>
        </a>
        <div id="collapsePages" class="collapse @if($pages=='sublist' || $pages=='sendm') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='sublist') active @endif" href="{{ route('newsletter.index') }}">Subscriber List</a>
                <a class="collapse-item @if($pages=='sendm') active @endif" href="{{ route('newsletter.create') }}"> Send
                    Mail</a>
            </div>
        </div>
    </li>
    {{--<li class="nav-item @if($pages=='blog') active @endif"><a class="nav-link" href="{{ route('blog.index') }}"><i--}}
                    {{--class="fas fa-fw fa-rss"></i><span>Blog</span></a></li>--}}
    <li class="nav-item @if($pages=='testi') active @endif"><a class="nav-link" href="{{ route('testimoni.index') }}"><i
                    class="fas fa-fw fa-comment"></i><span>Testimoni</span></a></li>
   <li class="nav-item @if($pages=='faq' || $pages=='newfaq') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFaq" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-question-circle"></i><span>FAQ</span>
        </a>
        <div id="collapseFaq" class="collapse @if($pages=='faq' || $pages=='newfaq') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='faq') active @endif" href="{{ route('faq.index') }}">Question List</a>
                <a class="collapse-item @if($pages=='newfaq') active @endif" href="{{ route('faq.create') }}">New Question</a>
            </div>
        </div>
    </li>
</ul>