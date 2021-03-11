@extends('layouts.app')

@section('title', 'prodotto Molisana ' .$prodotti['titolo'] .' hello')

@section('content')
<main>
    @php //@dd($prodotti); @endphp 
    <div>
        <img src="{{ $prodotti['src-h']}}" alt="{{ $prodotti['titolo']}}">
        <img src="{{ $prodotti['src-p']}}" alt="{{ $prodotti['titolo']}}">
    </div>

    <div class="info">
        @php //serve per convertire i tag html da stringa a funzionanti @endphp
        <p>
            {!! $prodotti['descrizione'] !!} 
        </p>
    </div>
</main>

@endsection
