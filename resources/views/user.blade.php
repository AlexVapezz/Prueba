@include('basic')
<body>
    <div id="main">
        @include('topbar')
        <h1 id="page_title">Lista de Usuarios</h1>
        <div id="table_content">
        <table id="main_table" border="2">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Rol</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['nombre']}}</td>
                    @foreach ($roles as $rol)
                        @if ($rol['id'] == $user['rol_id'])
                            <td>{{ $rol['name'] }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
        <span id="navigation_bottom">
            {{ $users->links()}}
        </span>
        </div>
    </div>
</body>
</html>