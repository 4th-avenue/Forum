<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth    
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/category">Category</a>
                </li>
                @endauth
                @guest    
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/register">Register</a>
                </li>
                @endguest
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">
                    <a class="nav-link" href="route('logout')"onclick="event.preventDefault();
                    this.closest('form').submit();">Welcome! {{auth()->user()->name}}・Log Out</a>
                    </li>
                </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>