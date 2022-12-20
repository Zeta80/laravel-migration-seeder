@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni in partenza... CIUF CIUF</h2>
        <ul>
            @foreach ($trains as $train)
                <h3>treno numero: {{ $train->codice_treno }}</h3>
                <li> andata: STAZIONE:{{ $train->stazione_partenza }}, {{ $train->giorno_partenza }},
                    {{ $train->orario_partenza }}
                </li>
                <li>arrivo: STAZIONE:{{ $train->stazione_arrivo }}, {{ $train->giorno_arrivo }}, {{ $train->orario_arrivo }}
                </li>
                <li>numero carrozze:{{ $train->numero_carrozze }}</li>
                <li>finanziato da: {{ $train->azienda }}</li>
            @endforeach
        </ul>
    </div>
@endsection
