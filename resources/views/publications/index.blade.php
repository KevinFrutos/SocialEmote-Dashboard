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
                    <p>Likes: {{ count($post['likes']) }}</p>
                    <p>Comments: {{ count($post['comments']) }}</p>
                    <form method="POST" action="{{ route('publications.destroy', ['publication' => $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
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
