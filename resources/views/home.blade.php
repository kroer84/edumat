@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center aqua-gradient title z-depth-3">Conjuntos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-9 text-justify">
                        <p>
                            <span class="tab">Un conjunto o colección lo forman unos elementos de la misma naturaleza, es decir, elementos diferenciados entre sí pero que poseen en común ciertas propiedades o características, y que pueden tener entre ellos, o con los elementos de otros conjuntos, ciertas relaciones.
                        </p>
                        <p>
                            <span class="tab">Un conjunto puede tener un número finito o infinito de elementos, en matemáticas es común denotar a los elementos mediante letras minúsculas y a los conjuntos por letras mayúsculas, así por ejemplo:
                        </p>
                            <p class="text-center">C = {a, b, c, d, e, f, g, h}</p>
                            <p class="tab">Dos conjuntos A y B son iguales, expresado A = B, solamente cuando constan de los mismos elementos.</p>
                    </div>
                    <div class="col-md-3">
                        <img class="img-fluid imagen" src="{{ asset('img/conjunto.png') }}" alt="">
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection