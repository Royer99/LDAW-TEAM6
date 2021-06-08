<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><h3>ProGamers</h3></a>
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <form  action="{{ route('logout') }}" method="POST" >
            @csrf
            <input type="submit"  value="Logout">
        </form>    
        </li>
    </ul>
</nav>