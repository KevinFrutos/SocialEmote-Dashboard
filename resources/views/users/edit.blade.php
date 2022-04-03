@extends('layout')

@section('title', 'Edit User')
@section('css')
    <link rel="stylesheet" href="/css/users/style.css">
@endsection
@section('content')
    <div class="default">
        <h1>Editar Usuario</h1>
        <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <label for="user">Usuario: </label>
            <input type="text" name="user" value="{{ $user->user }}" placeholder="Usuario">
            @error('user')
                <p>{{ $message }}</p>
            @enderror
            <label for="name">Nombre: </label>
            <input type="text" name="name" value="{{ $user->name }}" placeholder="Nombre">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <label for="last_name">Apellidos: </label>
            <input type="text" name="last_name" value="{{ $user['last_name'] }}" placeholder="Apellidos">
            @error('last_name')
                <p>{{ $message }}</p>
            @enderror
            <label for="email">Email: </label>
            <input type="text" name="email" value="{{ $user->email }}" placeholder="Email">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">Editar</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src='/js/main.js'></script>
@endsection
