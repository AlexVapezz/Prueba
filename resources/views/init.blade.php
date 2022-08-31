@include('basic')
<body>
    <div id="main">
        @include('topbar')
        <h1 id="main_text">¡BIENVENIDO A MI PRUEBA!</h1>
        <hr>
        <div id="buttons_side">
            <button class="btn btn-dark"  onclick=window.location='{{ url("user") }}'>Usuarios</button>
            <button class="btn btn-dark"  onclick=window.location='{{ url("project") }}'>Proyectos</button>
            <button class="btn btn-dark"  onclick=window.location='{{ url("activity") }}'>Actividades</button>
            <button class="btn btn-dark"  onclick=window.location='{{ url("incidence") }}'>Incidencias</button>
        </div>
    </div>
</body>
</html>