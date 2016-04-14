<!DOCTYPE html>
<html>
<head>
    <h2>Detalles del usuario:</h2>
</head>
<body>

    {!!Form::open([
        'method' => 'delete',
        'route' => ['user.destroy', $user->id]
    ])!!}

    <h3>Nombre:     {{$user->real_name}}</h3>
    <h3>Correo:     {{$user->email}}</h3>
    <h4>Opciones:</h4>

    <a href="{{route('user.edit', $user->id)}}" >Editar</a> 
    {!!Form::submit('Delete')!!}
    {!!Form::close()!!}

    <a href="{{route('user.index')}}">Usuarios</a>

   
</body>
</html>
