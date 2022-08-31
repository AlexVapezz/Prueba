@include('basic')
<body>
    <div id="main">
        @include('topbar')
        <h1 id="page_title">Lista de Incidencias</h1>
        <div id="table_content">
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">+</button>

            <!-- Tabla de contenido -->

            <table id="main_table" border="2">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Actividad</th>
                    <th>Funcion</th>
                </tr>
                @foreach($incidences as $incidence)
                    <tr>
                        <td>{{$incidence['id']}}</td>
                        <td>{{$incidence['name']}}</td>
                        <td>{{$incidence['description']}}</td>
                        @foreach ($activities as $activity)
                            @if ($activity['id'] == $incidence['activity_id'])
                                <td>{{ $activity['name'] }}</td>
                            @endif
                        @endforeach
                        <td>
                            <button class="btn btn-warning">
                                + user
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>

            <!-- Fin tabla de contenido -->

            <!-- Paginacion tabla -->

            <span id="navigation_bottom">
                {{ $incidences->links()}}
            </span>

            <!-- Fin paginacion tabla -->

            <!-- Mensaje de error o exito -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($erros->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <!-- Fin mensaje de error o exito -->

            <!-- Modal de envio de formulario -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Añadir incidencia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="addIncidence" method="POST">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Introduce nombre de la incidencia">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion</label>
                                        <input type="text" name="description" class="form-control" placeholder="Introduce descripcion de la incidencia">
                                    </div>
                                    <div class="form-group">
                                        <label>Actividad</label>
                                        <select class="form-control" name="activity_id">
                                            @foreach ($activities as $activity)
                                                <option>{{ $activity['id'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Fin de modal de envio de formulario -->

        </div>
    </div>

    <!-- Scripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>