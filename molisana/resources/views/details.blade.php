@extends('layouts.app')

@section('font-awesome')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('title', 'prodotto Molisana ' .$prodotti['titolo'] .' hello')

@section('content')
<main>
    @php //@dd($prodotti); @endphp 
    <div>
        <img src="{{ $prodotti['src-h']}}" alt="{{ $prodotti['titolo']}}">
        <img src="{{ $prodotti['src-p']}}" alt="{{ $prodotti['titolo']}}">
    </div>

    <div class="specifiche">
        <i class="fas fa-info-circle"></i>
        <i class="fas fa-weight"></i>
        <i class="fas fa-clock"></i>

    </div>

    <div class="descrizione">
        @php //serve per convertire i tag html da stringa a funzionanti @endphp
        <p>
            {!! $prodotti['descrizione'] !!} 
        </p>
    </div>
</main>

@endsection
