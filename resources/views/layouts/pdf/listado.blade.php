@extends("layouts.pdfinicio")
@section("content")

    <table class="table table-hover table-;striped">
        <thead>
            <tr>
                <th>numero</th>
                <th>compañia</th>
                <th>caracteristicas</th>
                <th>fecha_ingreso</th>
                <th>fecha_entrega</th>
                <th>procedimiento</th>

            </tr>

        </thead>
        <tbody>
            @foreach($cucharons as $cucharons)
            <tr>
                <td>{{$cucharons->numero}}</td>
                <td>{{$cucharons->compañia}}</td>
                <td>{{$cucharons->caracteristicas}}</td>
                <td>{{$cucharons->fecha_ingreso}}</td>
                <td>{{$cucharons->fecha_entrega}}</td>
                <td>{{$cucharons->procedimiento}}</td>
                <td class="text-right">{{$cucharons->entrada_cucharon}}</td>
                <td><img style="height: 100px; width: 100px; background-color #EFEFEF; margin: 20px;"
                class="card-img-top rounded-circle mx-auto d-block" src="images/{{$cucharons->entrada_cucharon}}" alt=""></td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
