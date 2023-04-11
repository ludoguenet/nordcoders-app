@extends('app')

@section('content')
    <div class="relative px-6 lg:px-8">
        <div class="mx-auto max-w-3xl py-24 lg:py-40">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-6xl"> Apprenez à développer <br>avec <span class="whitespace-nowrap text-transparent bg-clip-text bg-gradient-to-br from-green-100 to-green-500 dark:from-sky-100 dark:to-sky-500"> &lt;?nordcoders </span>
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400"> 👋 Je partage des tutoriels vidéos pour apprendre à construire des applications. Mon objectif est d'évoluer avec ma communauté pour une carrière accomplie. </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="https://www.youtube.com/NordCoders" class="rounded-md bg-green-600 dark:bg-sky-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 dark:hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600" target="_blank"> Découvrir la chaîne YouTube </a>
                    <a href="https://github.com/ludoguenet?tab=repositories" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-100" target="_blank"> Codes sources <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-700 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-green-600 dark:text-sky-600"> Nord Coders, c'est quoi? </h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl"> Un condensé de ce qu'il faut savoir </p>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400"> Les formats de mes tutoriels sont pensés pour vous proposer des vidéos <span class="font-semibold">courtes</span> et <span class="font-semibold">axées sur la pratique</span>. Vous trouverez les bases fondamentales pour créer une application professionnelle en PHP et JavaScript. </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-100">
                                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600 dark:bg-sky-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"></path>
                                    </svg>
                                </div> Les bonnes pratiques
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400"> Nous devons tendre à respecter les bonnes pratiques pour conserver un code propre, testé et maintenable. </dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-100">
                                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600 dark:bg-sky-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"></path>
                                    </svg>
                                </div> Expérience pratique
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400"> Mes tutoriels sont basés sur ma propre expérience professionnelle, et donc intrinsèquement lié à l'exercice pratique. </dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-100">
                                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600 dark:bg-sky-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"></path>
                                    </svg>
                                </div> Utilisation de frameworks
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400"> Même si cela demande un apprentissage supplémentaire, se reposer sur des épaules de géants nous facilitera toujours la vie. </dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-100">
                                <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-green-600 dark:bg-sky-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 002.25-2.25v-15a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 4.5v15a2.25 2.25 0 002.25 2.25z"></path>
                                    </svg>
                                </div> Restons en contact
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-400"> Nous sommes avant tout une communauté, tous les moyens sont bons pour s'entraider. </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
