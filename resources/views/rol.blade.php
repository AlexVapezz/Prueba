@include('basic')
<body>
    <div id="main">
        @include('topbar')
        <h1 id="page_title">Lista de Roles</h1>
        <div id="table_content">
        <table id="main_table" border="2">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
            @foreach($roles as $rol)
                <tr>
                    <td>{{$rol['id']}}</td>
                    <td>{{$rol['name']}}</td>
                </tr>
            @endforeach
        </table>
        <span id="navigation_bottom">
            {{ $roles->links()}}
        </span>
        </div>
    </div>
</body>
</html>