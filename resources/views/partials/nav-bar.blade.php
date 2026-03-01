<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Service</a>
                    <a href="{{ route('team') }}" class="nav-item nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Team</a>
                    <a href="{{ route('projects') }}" class="nav-item nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Project</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ml-auto">
                    <a class="btn" href="{{ route('quote') }}">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
