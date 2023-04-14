@extends('app')

@section('content')
    @include('includes.success')

    <div class="px-4 sm:px-6 lg:px-8 mt-10">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">
                    Articles
                </h1>
                <p class="mt-2 text-sm text-gray-700">Liste des articles avec contenu, status et actions.</p>
            </div>
            <a
                href="{{ route('dashboard.posts.create') }}"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-5 mr-2 -ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
                Ecrire un article
            </a>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                Titre
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Slug
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Tags
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Status
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Publié le
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($posts as $post)
                        <tr>
                            <td class="py-4 text-sm text-gray-500">
                                <div class="text-gray-900">Front-end Developer</div>
                                <div class="text-gray-500">{{ $post->title }}</div>
                            </td>
                            <td class="px-3 py-4 text-sm text-gray-500">
                                {{ $post->slug }}
                            </td>
                            <td class="px-3 py-4 text-sm text-gray-500">
                                @foreach($post->tags as $tag)
                                    <span class="text-{{ $tag->colour }}-600">{{ $tag->name }}</span>{{ $loop->last ? '' : ', ' }}
                                @endforeach
                            </td>
                            <td class="px-3 py-4 text-sm text-gray-500">
                                <span class="inline-flex rounded-full bg-{{ $post->status_color }}-100 px-2 text-xs font-semibold leading-5 text-{{ $post->status_color }}-800">
                                    {{ $post->status }}
                                </span>
                            </td>
                            <td class="px-3 py-4 text-sm text-gray-500">
                                {{ $post->created_at->format('d/m/Y') }}
                            </td>
                            <td class="relative py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <div
                                    class="flex items-center gap-2"
                                >
                                    <a
                                        href="{{ route('posts.show', $post) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        target="_blank"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                        </svg>
                                    </a>

                                    <a
                                        href="{{ route('dashboard.posts.edit', $post) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('dashboard.posts.destroy', $post) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <a
                                            href="#"
                                            onclick="return confirm('sûr?') ? this.closest('form').submit() : null;"
                                            class="font-medium text-red-600 dark:text-blue-500 hover:underline"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                <div class="mt-5">
                    {{ $posts->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
