<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <div class="sidebar-heading">
        <a href="{{route('index')}}"><img src="{{asset('admin/img/Group2.png')}}" class="img-fluid" style="margin: 1em;"></a>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @if($pages=='dash') active @endif"><a class="nav-link" href="{{route('user')}}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item @if($pages=='paylist' || $pages=='addpay') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-credit-card"></i><span>Payment Method</span>
        </a>
        <div id="collapsePages" class="collapse @if($pages=='paylist' || $pages=='addpay') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='paylist') active @endif" href="{{ route('payment.index') }}">Payment Method List</a>
                <a class="collapse-item @if($pages=='addpay') active @endif" href="{{ route('payment.create') }}">Add New Method</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if($pages=='web' || $pages=='app' || $pages=='des') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-shopping-basket"></i><span>Orders</span>
        </a>
        <div id="collapsePages2" class="collapse @if($pages=='web' || $pages=='app' || $pages=='des') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($pages=='web') active @endif" href="{{ route('order.index', 'web') }}">Website</a>
                <a class="collapse-item @if($pages=='app') active @endif" href="{{ route('order.index', 'app') }}">Android Application</a>
                <a class="collapse-item @if($pages=='des') active @endif" href="{{ route('order.index', 'design') }}">Design</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if($pages=='mreq') active @endif"><a class="nav-link" href="{{ route('my-request.index') }}"><i class="fas fa-fw fa-comments-dollar"></i><span>My Meet Request</span></a></li>
    <li class="nav-item @if($pages=='faq') active @endif"><a class="nav-link" href="{{ route('faq-list.index') }}"><i class="fas fa-fw fa-question-circle"></i><span>FAQ</span></a></li>
</ul>