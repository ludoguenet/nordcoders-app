@extends('app')

@section('content')
    @include('includes.errors')

    <form
        action="{{ route('dashboard.posts.store') }}"
        method="post"
    >
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
            <input type="text" name="title" value="{{ old('title') }}" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
        </div>

        <div class="mb-6">
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your content</label>
            <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500" placeholder="Leave a comment...">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Register new account</button>
    </form>
@endsection

@section('extra-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ),  {
                codeBlock: {
                    languages: [
                        { language: 'css', label: 'CSS' },
                        { language: 'html', label: 'HTML' }
                    ]
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
