<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav w-100 d-flex justify-content-between">
        <li class="nav-item">
            <a href="{{route('dashboard.profile.edit')}}" class="nav-link">
                <i class="fas fa-user"></i>
            </a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('dashboard.logout') }}">
                @csrf
                <button type="submit" class="btn nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </li>
    </ul>
</nav>
