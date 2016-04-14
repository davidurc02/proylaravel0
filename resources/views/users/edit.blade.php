@extends('layouts.master')

@section('sidebar')
    @parent

    <p>Editando usuario "{{$user->real_name}}"</p>
@stop

@section('content')
    {!!Form::model($user, [
        'method' => 'patch',
        'route' => ['user.update', $user->id]
        ])!!}

    {!!Form::label('real_name', 'Nombre')!!}
    {!!Form::text('real_name', $user->real_name, ['placeholder' => "Give a name"])!!}

    <br>
	<br>
    {!!Form::label('email', 'Correo')!!}
    {!!Form::text('email', $user->email, ['placeholder' => "Give an email"])!!}

    {!!Form::submit('Edit')!!}
    {!!Form::close()!!}
@stop