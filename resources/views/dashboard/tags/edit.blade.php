@extends('app')

@section('content')
    @include('includes.errors')

    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <form
                action="{{ route('dashboard.tags.update', $tag) }}"
                method="post"
            >
                @method('PUT')
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nom
                    </label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $tag->name) }}"
                        id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:shadow-sm-light"
                        placeholder="Mon super nom..."
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="colour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Couleur
                    </label>
                    <input
                        type="text"
                        name="colour"
                        value="{{ old('colour', $tag->colour) }}"
                        id="colour"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:shadow-sm-light"
                        placeholder="Ma super couleur..."
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="mt-5 text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800"
                >
                    Modifier le tag
                </button>
            </form>
        </div>
    </div>
@endsection
