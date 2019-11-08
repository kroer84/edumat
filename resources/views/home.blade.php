@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col separacion card z-depth-4">
                                <div class="card-header text-center aqua-gradient title z-depth-3" style="position:relative; top:-20px;">
                                        Calificaciones
                                </div>
                            <div class="card-body">
                                <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        </div>

                        <div class="col separacion card z-depth-4">
                            <div class="card-header text-center purple-gradient title z-depth-3" style="position:relative; top:-20px;">
                                    Burndown charts
                            </div>
                            <div class="card-body">
                                    <canvas id="myChart2" width="400" height="400"></canvas>
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
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Calificaciones Obtenidas',
                backgroundColor: 'rgba(0, 188, 212, 0.7)',
                borderColor: '#01579b',
                data: [7,8,10,8,9],
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

<script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
    
            // The data for our dataset
            data: {
                labels: ['INICIO','4/08/19', '11/08/19','18/08/19','25/08/19','1/09/19','8/09/19','15/09/19','22/09/19','29/09/19','6/10/19','13/10/19','20/10/19','27/10/19','3/11/19','10/11/19','17/11/19','24/11/19','1/12/19','8/12/19','22/12/19'],
                datasets: [{
                    label: 'Desempeño deceado',
                    borderColor: '#01579b',
                    data: [100,95,90,85,80,75,70,65,60,55,50,45,40,35,30,25,20,15,10,5,0],
                },{
                    label: 'Desempeño real',
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'red',
                    data:[100,90,85,70,70,70,70,70,60,50,47,45,42,39,35,29,29,25,22,20,15,10,6,5,0]
                }]
            },
    
            // Configuration options go here
            options: {}
        });
    </script>


<script type="text/javascript" src="{{ ('js/graficas.min.js') }}"></script>
@endsection