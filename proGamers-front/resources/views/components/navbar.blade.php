<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><h3>ProGamers</h3></a>
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">

    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
    @else
        <a href = "{{ route('logoutt') }}">Logout</a> 
        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>    
    @endguest   
    </li>
    </ul>
</nav>