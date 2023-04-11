@extends('app')

@section('content')
    @include('includes.errors')
    @include('includes.success')

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="{{ route('contact.store') }}" method="post" class="space-y-8">
                @csrf
                <div>
                    <label for="senderMail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Votre email
                    </label>
                    <input
                        type="email"
                        id="senderMail"
                        name="senderMail"
                        value="{{ old('senderMail') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com"
                        required
                    >
                </div>
                <div>
                    <label for="senderSubject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sujet
                    </label>
                    <input
                        type="text"
                        id="senderSubject"
                        name="senderSubject"
                        value="{{ old('senderSubject') }}"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you"
                        required
                    >
                </div>
                <div class="sm:col-span-2">
                    <label
                        for="senderMessage"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                    >
                        Votre message
                    </label>
                    <textarea
                        id="senderMessage"
                        name="senderMessage"
                        rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                        placeholder="Leave a comment..."
                    ></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-indigo-700 sm:w-fit hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Send message</button>
            </form>
        </div>
    </section>
@endsection
