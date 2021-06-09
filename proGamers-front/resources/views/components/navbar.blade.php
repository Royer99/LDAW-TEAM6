<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><h3>ProGamers</h3></a>
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <!--<form  action="{{ route('logoutt') }}" method="POST" >
            @csrf
            <input type="submit"  value="Logout">
        </form>-->
        <a href = "{{ route('logoutt') }}">Logout</a>    
    </li>
        <a href = "{{ route('login') }}">Login</a>    
    <li>
    </li>
    </ul>
</nav>