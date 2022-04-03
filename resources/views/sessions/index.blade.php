@extends('layout')

@section('title', 'Sessions')
@section('css')
    <link rel="stylesheet" href="/css/sessions/style.css">
@endsection
@section('content')
    <div class="default">
        <h1>Sessions</h1>
        @if (count($sessions) > 0)
            @foreach ($sessions as $session)
                <div>
                    <p>{{ $session['user'] }}</p>
                </div>
            @endforeach
        @else
            <p>No hay sesiones iniciadas</p>
        @endif
    </div>
@endsection

@section('scripts')
    <script src='/js/main.js'></script>
@endsection
