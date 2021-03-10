@extends('layouts.app')

@section('title','prodotti Molisana')

@section('content')
<main class="container">
    @php // @dd($formatiPasta) imported data correctly 
    @endphp

    <div class="paste">
        @foreach($formatiPasta as $formato)
            <div class="box">
                <img src="{{ $formato['src']}}" alt="{{ $formato['titolo']}}">
            </div>
        @endforeach

    </div>
    @foreach($formatiPasta as $formato)
        {{ $formato['titolo']}}
        {{ $formato['tipo']}}
    @endforeach
</main>
@endsection