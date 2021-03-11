@extends('layouts.app')

@section('title','prodotti Molisana')

@section('content')
<main class="container">
    @php // @dd($formatiPasta) imported data correctly 
    @endphp

    <div class="paste">
        @foreach($formatiPasta as $key => $formato)
            @php //@dump($key);@endphp
            <h2>
                {{ $key }}
            </h2>
            <div class="tipo-pasta">
                
                @foreach($formato as $key => $tipo)
                    <div class="box">
                        <img src="{{ $tipo['src']}}" alt="{{ $tipo['titolo']}}">
                        <a href="{{ route('route-details',['indice' => $key ]) }}">
                            <div class="info">
                                <h2>
                                    {{ $tipo['titolo']}}
                                </h2>
                                <h3>
                                    {{ $tipo['tipo']}}
                                </h3>
                            </div>
                        </a>
                        
                    </div>

                @endforeach
            </div>
            
            
        @endforeach

    </div>
    
</main>
@endsection