<!-- Authentication Links -->
@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
    </li>
@endif
<li>
    <a href="{{ url('admin/show')}}" class="inactive">Manage Applications</a>
    <ul class="nav nav-sub" id="collapseAppSubMenu">
    <li class="{{ set_active('admin/show') }}"><a href="{{ url('admin/show')}}">View All</a></li>
    <li class="{{ set_active('admin/servers') }}"><a href="{{ url('admin/servers')}}">Add Server</a></li>
    <li class="{{ set_active('admin/applications') }}"><a href="{{ url('admin/applications')}}">Add Application</a></li>
    </ul>
</li>
