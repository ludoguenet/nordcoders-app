@extends('app')

@section('content')
    @include('includes.errors')

    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <form
                action="{{ route('dashboard.posts.update', $post) }}"
                method="post"
                id="editor-post-form"
            >
                @method('PUT')
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Titre
                    </label>
                    <input
                        type="text"
                        name="title"
                        value="{{ old('title', $post->title) }}"
                        id="title"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:shadow-sm-light"
                        placeholder="Mon super titre..."
                        required
                    >
                </div>

                <div class="mb-6 hidden">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your content</label>
                    <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500" placeholder="Leave a comment...">{{ old('content') }}</textarea>
                </div>

                <div class="flex flex-col mb-6 space-y-2">
                    <label for="editor" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                        Contenu
                    </label>
                    <div id="editor" class="block w-full rounded-md border-gray-300 shadow-sm">
                        {!! $post->content !!}
                    </div>
                </div>

                <div class="flex flex-col space-y-2">
                    <label for="editor" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                        Tags
                    </label>
                    <x-forms.multi-select
                        :tags="$tags"
                        :selected="$post->tags->pluck('id')->toArray()"
                    />
                </div>

                <button
                    type="submit"
                    class="mt-5 text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800"
                >
                    Modifier l'article
                </button>
            </form>
        </div>
    </div>
@endsection
