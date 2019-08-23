<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="{{url('/')}}" class="navbar-brand"><img src="{{URL::asset('dist/img/logo.png')}}" width="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/products')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
        </ul>
        <li class="list-inline-item"><a href="{{url('/login')}}">ЛОГИНН</a></li>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
