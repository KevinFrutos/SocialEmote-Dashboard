@extends('layout')

@section('title', 'Publications')
@section('css')
    <link rel="stylesheet" href="/css/publications/style.css">
@endsection
@section('content')
    <div class="default">
        <h1>Publications</h1>
        @if (count($publications) > 0)
            @foreach ($publications as $post)
                <div class="default-publications">
                    <p>{{ $post['user'] }}</p>
                    <p>{{ $post['description'] }}</p>
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
