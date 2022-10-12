@extends('layouts.app')
@section('meta', 'Trains')

@section('content')
    <section class="card-container">
        @foreach ($trains as $train)
                <div class="card">
                    <div class="layover"></div>
                    <div class="card-content">
                        <h4>
                            ID:
                        </h4>
                        <span>{{ $train->id }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Stazione di Partenza: 
                        </h4>
                        <span>{{ $train->stazione_partenza }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Stazione di Arrivo: 
                        </h4>
                        <span>{{ $train->stazione_arrivo }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Orario di Partenza: 
                        </h4>
                        <span>{{ \Carbon\Carbon::createFromFormat('H:i:s',$train->orario_partenza)->format('h:i') }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Orario di Arrivo: 
                        </h4>
                        <span>{{ \Carbon\Carbon::createFromFormat('H:i:s',$train->orario_arrivo)->format('h:i') }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Codice Treno: 
                        </h4>
                        <span>{{ $train->codice_treno }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Numero Carrozze:
                        </h4>
                        <span>{{ $train->numero_carrozze }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            In orario?
                        </h4>
                        {{ $train->in_orario ? 'Sì' : 'No' }}
                    </div>
                    <div class="card-content">
                        <h4>
                            Treno cancellato?
                        </h4>
                        {{ $train->cancellato ? 'Sì' : 'No' }}
                    </div>
                </div>
        @endforeach
    </section>
@endsection