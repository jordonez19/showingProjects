
    <nav class="navbar navbar-expand-sm  navbar-light bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand text-primary fw-bold" href="/">
                {{ config('app.name') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills">
                    <li class = "nav-item "><a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" href="/"> Home </a></li>
                    <li class = "nav-item "><a class="nav-link {{request()->routeIs('about') ? 'active' : ''}}" href="{{route('about')}}"> About </a></li>
                    <li class = "nav-item "><a class="nav-link {{request()->routeIs('contact') ? 'active' : ''}}" href="{{route('contact')}}"> Contact </a></li>
                    <li class = "nav-item "><a class="nav-link {{request()->routeIs('projects.*') ? 'active' : ''}}" href="{{route('projects.index')}}"> Projects </a></li>

                    @guest
                        <li class = "nav-item"> <a class="nav-link  {{request()->routeIs('login') ? 'active' : ''}}" href="{{route('login')}}">  Login </a></li>
                    @else
                        <li class = "nav-item">
                            <a class="nav-link {{request()->routeIs('logout') ? 'active' : ''}}" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
