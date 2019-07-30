<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="{{ url('/') }}">Home</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('posts.create') }}">Add Post</a>
                    <a class="dropdown-item" href="{{ route('categories.index') }}">Add Category</a>
                    <a class="dropdown-item" href="{{ route('tags.index') }}">Add Tag</a>
                    <a class="dropdown-item" href="#">Add User</a>
                </div>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('profile.index') }}" class="nav-link position-relative">
                    <img src="{{ asset('uploads/avatar/' . \Illuminate\Support\Facades\Auth::user()->avatar) }}" class="topbar-profile-avatar">
                    Welcome, {{ Auth::user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out mr-2"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="nav-link" href="{{ route('posts.index') }}">
            Posts
            <span class="badge badge-pill bg-light align-text-bottom">{{ count($posts) }}</span>
        </a>
        <a class="nav-link" href="#">
            contacts
            <span class="badge badge-pill bg-light align-text-bottom">{{ count($contacts) }}</span>
        </a>
        <a class="nav-link" href="#">
            comments
            <span class="badge badge-pill bg-light align-text-bottom">{{ count($comments) }}</span>
        </a>
    </nav>
</div>