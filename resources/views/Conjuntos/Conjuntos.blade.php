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
                    <div class="container">
                        <div class="row">
                            <div class="card col-md-1 float-left blue"style="position:fixed; left:  80px; top:177px;">
                                <div class="card-body">
                                <a type="button" class="btn rgba(0, 0, 0, 0.5) glass black-text waves-effect z-depth-3 font-weight-bold" href="{{ route('Habilidad_Conjuntos') }}" > <h6>Habilidad</h6> </a>
                                <a type="button" class="btn rgba(0, 0, 0, 0.5) glass black-text waves-effect z-depth-3 font-weight-bold" href="{{ route('cuestionario.index') }}"> <h6>Evaluación </h6> </a>
                                
                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="comtainer">
                                    <div class="row">
                                        <div class="col-md-7 offset-lg-1 text-justify">
                                            <p>
                                                <span class="tab">Un conjunto o colección lo forman unos elementos de la
                                                    misma
                                                    naturaleza, es decir, elementos diferenciados entre sí pero que
                                                    poseen en común
                                                    ciertas propiedades o características, y que pueden tener entre
                                                    ellos, o con los
                                                    elementos de otros conjuntos, ciertas relaciones.
                                            </p>
                                            <p>
                                                <span class="tab">Un conjunto puede tener un número finito o infinito de
                                                    elementos, en
                                                    matemáticas es común denotar a los elementos mediante letras
                                                    minúsculas y a los
                                                    conjuntos por letras mayúsculas, así por ejemplo:
                                            </p>
                                            <p class="text-center">C = {a, b, c, d, e, f, g, h}</p>
                                            <p class="tab">Dos conjuntos A y B son iguales, expresado A = B, solamente
                                                cuando constan de
                                                los mismos elementos.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img class="img-fluid imagen" src="{{ asset('img/conjunto.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <br>


                    <hr>
                    <br>

                    <div class="row">
                        <div class="container">
                            <div class="col-md-8 offset-2 text-justify">
                                <div class="card card-cascade wider z-depth-5">

                                    <!-- Card image -->
                                    <div class="card-header text-center danger-color-dark title z-depth-3">
                                        Video Explicativo
                                    </div>
                                    <div class="view view-cascade overlay">
                                        <div class="card-body embed-responsive embed-responsive-21by9">
                                            <iframe width="916" height="515"
                                                src="https://www.youtube.com/embed/KmcRMlv9_T4?list=PLeySRPnY35dHACeGz_7oiU5Wo11AUt964"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center pb-0">

                                        <!-- Title -->
                                        <h4 class="card-title"><strong>Matemáticas profe Alex</strong></h4>


                                        <!-- Text -->
                                        <p class="card-text">Introducción al concepto de conjuntos en el que se explica
                                            que son conjuntos, que es un elemento y cuándo un elemento pertenece o no a
                                            un conjunto, dentro del curso de conjuntos. </p>

                                        <!-- youtube -->
                                        <a class="px-2 fa-lg li-ic text-danger"
                                            href="https://www.youtube.com/channel/UCanMxWvOoiwtjLYm08Bo8QQ"> Canal <i
                                                class="fab fa-youtube"></i></a>




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