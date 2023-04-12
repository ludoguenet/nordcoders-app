@extends('app')

@section('content')
    Hello {{ auth()->user()->name }}

    <a href="{{ route('dashboard.posts.index') }}">Voir les posts</a>
@endsection
