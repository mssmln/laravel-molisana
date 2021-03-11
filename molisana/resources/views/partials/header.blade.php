<header>
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}" alt="">
    </div>
    <nav>
        <ul>
            <li >
                <a class="{{(Request::route()->getName() == 'route-home') ? 'active' : '' }}" href="{{ route('route-home')}}">Home</a>
            </li>
            <li>
                <a class="{{(Request::route()->getName() == 'route-prodotti') ? 'active' : '' }}" href="{{ route('route-prodotti')}}">Prodotti</a>
            </li>
            <li>
                <a class="{{(Request::route()->getName() == 'route-informazioni') ? 'active' : '' }}" href="{{ route('route-informazioni')}}">News</a>
            </li>
        </ul>
    </nav>
    @php //il Request ci mostra stampato in html il nome della rotta 
    //{{ Request::route()->getName() }}@endphp 
    
</header>