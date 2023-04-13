@extends('app')

@section('content')
    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h1 class="text-2xl">Hello {{ auth()->user()->name }}</h1>
            <div class="mt-5">
                <a href="{{ route('dashboard.posts.index') }}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    Voir les posts
                </a>
            </div>
        </div>
    </div>
@endsection
