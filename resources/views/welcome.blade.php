@extends('Comment.layout')

@section('content')
    @if (session('success'))
        <div class="bg-green-200 p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <section class="text-gray-600 body-font bg-indigo-900 dark:bg-slate-900">
        <div class="container mx-auto flex md:px-24 md:py-10 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow mt-5 md:mt-0   md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1
                    class="text-2xl font-extrabold leading-9 tracking-tight mb-3 text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                    Title of Project
                </h1>
                <p class="mb-8 md:pl-0  pl-2 pr-2 leading-relaxed dark:text-gray-300">
                    Short description here, Short description here Short description here Short description here Short
                    description here Short description here.
                </p>
                <div class="flex justify-center">
                    <a target="_blank" href="https://portfolio.sanyuaung.dev/"
                        class="inline-flex text-white bg-emerald-600 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-600 rounded text-lg">My
                        Portfolio
                    </a>
                    <a href="{{ route('create') }}"
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Next
                        →</a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
                <img class="object-cover object-center rounded" alt="hero"
                    src="https://www.svgrepo.com/show/490900/hot-air-balloon.svg">
            </div>
        </div>
    </section>
@endsection
