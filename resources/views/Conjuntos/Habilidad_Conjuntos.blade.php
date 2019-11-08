@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center aqua-gradient title z-depth-3">Desarrollo de habilidades</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="card col-8 offset-2">
                                <div class="card-body text-justify">
                                    <p>
                                        En la siguiete actividad tendras que seleccionar de la targeta de la izquierda
                                        los elementos que corresponden al conjunto que se encuentra en el lado derecho
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col separacion">
                                <div class="card z-depth-5">
                                    <div class="card-header text-center">
                                        Elementos a elegir
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <button id="caja1" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)">a</button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja2" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)"><i
                                                            class="fas fa-skull"></i></button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja3" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)">b</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <button id="caja4" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)"><i
                                                            class="fab fa-mailchimp"></i></button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja5" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)"><i
                                                            class="fas fa-hippo"></i></button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja6" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)">c</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <button id="caja7" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)">d</button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja8" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)"><i
                                                            class="fas fa-fish"></i></button>
                                                </div>
                                                <div class="col">
                                                    <button id="caja9" class="btn btn-primary z-depth-5"
                                                        draggable="true" ondragstart="dragstart(this, event)">f</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col separacion justify-content-center">
                                <div class="card  z-depth-5">
                                    <div class="card-header text-center">
                                        Conjunto A
                                    </div>
                                    <div class="card-body text-center align-middle">
                                        <div class="container blue conjunto align-self-center z-depth-5 text-center" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
                                            
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
</div>
@endsection
@section('script')
<script>

function dragstart(caja, evento) {
    // el elemento a arrastrar
    event.dataTransfer.setData('Data', caja.id);
 }

function drop(target, evento) {
    // obtenemos los datos
    var caja = event.dataTransfer.getData('Data');
    switch (caja) {
    case 'caja1':
        target.appendChild(document.getElementById(caja));
        break;
    case 'caja3':
    target.appendChild(document.getElementById(caja));
        break;
    case 'caja6':
    target.appendChild(document.getElementById(caja));
        break;
    case 'caja7':
    target.appendChild(document.getElementById(caja));
        break;
    case 'caja9':
    target.appendChild(document.getElementById(caja));
        break;
    default:
    alert('No es un elemento valido para este conjunto '+caja);
}

  }
</script>

@endsection