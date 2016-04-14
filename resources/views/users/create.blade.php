<!DOCTYPE html>
<html>
<body>

	<h1>Registro de un nuevo usuario:</h1>
	
	{!!Form::open(['route' => 'user.store']) !!}

		{!!Form::label('real_name', 'Nombre:')!!}
		{!!Form::text('real_name', '',['class' => "form-control",'placeholder' => "Enter a Name"]) !!}
        <br />
        <br />
        {!!Form::label('email', 'Correo') !!}
		{!!Form::text('email', '',['class' => "form-control",'placeholder' => "Enter a Name"]) !!}
        <br />
        <br />
        {!!Form::label('password', 'Password')!!}
        {!!Form::Password('password') !!}
        <br />
        <br />
        {!!Form::submit('Create') !!}

    {!! Form::close()!!}

    <a href="{{route('user.index')}}">Usuarios</a>

</body>
</html>