@extends('layout')

@section('title', 'Users')
@section('css')
    <link rel="stylesheet" href="/css/users/style.css">
@endsection
@section('content')
    <div class="default">
        <h1>Registers</h1>
        @if (count($registers) > 0)
            @foreach ($registers as $register)
                <div class="default-register">
                    <p>Usuario: {{ $register['user'] }}</p>
                    <p>Nombre: {{ $register['name'] }}</p>
                    <p>Apellido: {{ $register['last_name'] }}</p>
                    <p>Email: {{ $register['email'] }}</p>
                    <p>Followers: {{ count($register['followers']) }}</p>
                    <p>Following: {{ count($register['following']) }}</p>
                    <form method="POST" action="{{ route('users.destroy', ['user' => $register->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <a href="{{ route('users.edit', ['user' => $register->id]) }}">Edit</a>
                </div>
            @endforeach
        @else
            <p>No hay publicaciones</p>
        @endif
    </div>
@endsection

@section('scripts')
    <script src='/js/main.js'></script>
@endsection
