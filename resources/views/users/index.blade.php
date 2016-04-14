<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

</head>
<body>


	<div class="centered"     style="position:absolute; width:70%; height:100px; left:15%; top:10%; margin-left:-50px; margin-top:-50px">
        <div id="contents">
		
				<h1>Usuarios registrados</h1>
				<div class="container">
					<div class="content">
						<div class="title">ID - Nombre - Email</div>
					</div>
				</div>

				@if($users)
				<u1>
					@foreach($users as $user)
                <li>
                    {{ $user->id }}     -      {{    $user->real_name }}     -      {{    $user->email }}
                    <a href="{{route('user.show', $user->id)}}">Detalles</a>
                </li>
                @endforeach
				</u1>
				@else
					Todavía no hay ningún usuario registrado
				@endif
					<br>
					<button type="button" onclick="window.location='{{url("user/create") }}'">Create User</button>
		</div>
    </div>    
</body>
</html>