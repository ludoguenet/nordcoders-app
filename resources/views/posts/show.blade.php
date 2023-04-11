@extends('app')

@section('content')
    <div class="bg-white py-32 px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
            <p class="text-base font-semibold leading-7 text-emerald-600">Introducing</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                {{ $post->title }}
            </h1>
            <div class="mt-16 max-w-2xl">
                <p class="mt-6">
                    {{ $post->content }}
                </p>
            </div>
        </div>
    </div>
@endsection
