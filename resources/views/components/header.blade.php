<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <ul class="navbar-nav mr-3">
        <li><a href="#"
                data-toggle="sidebar"
                class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="nav-link nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
        </li>
    </ul>
</nav>
