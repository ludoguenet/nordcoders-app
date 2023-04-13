@extends('app')

@section('content')
    <div class="bg-white py-6">
        <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
            <p class="text-base font-semibold leading-7 text-sky-600">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quia.
            </p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                {{ $post->title }}
            </h1>
            <div class="mt-8 max-w-2xl">
                <p class="mt-6">
                    {!! $post->content !!}
                </p>
            </div>
        </div>
    </div>
@endsection
