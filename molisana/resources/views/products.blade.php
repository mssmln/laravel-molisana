@extends('layouts.app')

@section('title','prodotti Molisana')

@section('content')
<main class="container">
    @php // @dd($formatiPasta) imported data correctly 
    @endphp

    <div class="paste">
        @foreach($formatiPasta as $key => $formato)
            <div class="box">
                <img src="{{ $formato['src']}}" alt="{{ $formato['titolo']}}">
                <a href="{{ route('route-details',['indice' => $key ]) }}">
                    <div class="info">
                        <h2>
                            {{ $formato['titolo']}}
                        </h2>
                        <h3>
                            {{ $formato['tipo']}}
                        </h3>
                    </div>
                </a>
                
            </div>
        @endforeach

    </div>
    
</main>
@endsection