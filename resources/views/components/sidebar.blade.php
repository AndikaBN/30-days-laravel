<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">ANDIKABN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ABN</a>
        </div>
        <ul class="sidebar-menu">
            
            {{-- <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google
                        Maps</span></a>
                <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                    <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                    <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                    <li><a href="gmaps-marker.html">Marker</a></li>
                    <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                    <li><a href="gmaps-route.html">Route</a></li>
                    <li><a href="gmaps-simple.html">Simple</a></li>
                </ul>
            </li> --}}
            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('users.index') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Tugas 1</span>
                </a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3"> 
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"

            class="btn btn-danger btn-lg btn-block btn-icon-split">
            Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
    </aside>
</div>
