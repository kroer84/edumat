@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center aqua-gradient title z-depth-3">Evaluación</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-1 float-left blue" style="position:fixed; left:  80px; top:177px;">
                                <div class="card-body">
                                    <a type="button"
                                        class="btn rgba(0, 0, 0, 0.5) glass black-text waves-effect z-depth-3 font-weight-bold"
                                        href="{{ route('Habilidad_Conjuntos') }}">
                                        <h6>Habilidad</h6>
                                    </a>
                                    <a type="button"
                                        class="btn rgba(0, 0, 0, 0.5) glass black-text waves-effect z-depth-3 font-weight-bold"
                                        href="{{ route('cuestionario.index') }}">
                                        <h6>Evaluación </h6>
                                    </a>

                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="comtainer">
                                    <div class="row">
                                        <div class="col-md-12 offset-lg-1 text-justify">
                                            <form method="POST" action="/preguntas">

                                                @foreach ($preguntas as $pregunta)
                                                <h5>{{ $pregunta->id }}. {{ $pregunta->pregunta }}</h5>

                                                @csrf
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="{{ $pregunta->id }}"
                                                        id="{{ $pregunta->id }}">
                                                    <label>
                                                        Verdadero
                                                    </label><br>
                                                    <input class="form-check-input" type="radio" name="{{ $pregunta->id }}"
                                                        id="{{ $pregunta->id }}">
                                                    <label>
                                                        Falso
                                                    </label>
                                                </div>

                                                <br>
                                                @endforeach
                                                <button type="submit"
                                                    class="btn btn-outline-primary btn-block">enviar</button>
                                            </form>
                                        </div>
                                    </div>


                                </div>
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