@extends('layouts.app')

@section('font-awesome')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('title', 'prodotto Molisana ' .$prodotti['titolo'] .' hello')

@section('content')
<main>
    @php //@dd($prodotti); @endphp 
    <div class="foto">
        <img src="{{ $prodotti['src-h']}}" alt="{{ $prodotti['titolo']}}">
        <img src="{{ $prodotti['src-p']}}" alt="{{ $prodotti['titolo']}}">
    </div>

    <div class="specifiche container">
        <i class="fas fa-info-circle"></i>
        @php //<div>{{ $prodotti['tipo']}}</div>@endphp
        <i class="fas fa-weight"></i>
        @php //<div>{{ $prodotti['peso']}}</div>@endphp
        <i class="fas fa-clock"></i>
        @php //<div>{{ $prodotti['cottura']}}</div>@endphp
    </div>

    <div class="descrizione container">
        @php //serve per convertire i tag html da stringa a funzionanti @endphp
        <p>
            {!! $prodotti['descrizione'] !!} 
        </p>
    </div>
</main>

@endsection
