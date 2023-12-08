@extends('Comment.layout')

@section('content')
    {{-- <h1 class="text-2xl font-bold mb-4">Submit Feedback</h1> --}}

    @if ($errors->any())
        <div class="bg-red-200 p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <form action="/feedback/store" method="post">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-semibold">Name:</label>
            <input type="text" name="name" id="name" class="form-input w-full">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600 font-semibold">Email:</label>
            <input type="email" name="email" id="email" class="form-input w-full">
        </div>

        <div class="mb-4">
            <label for="current_position" class="block text-gray-600 font-semibold">Current Position:</label>
            <input type="text" name="current_position" id="current_position" class="form-input w-full">
        </div>

        <div class="mb-4">
            <label for="current_company" class="block text-gray-600 font-semibold">Current Company:</label>
            <input type="text" name="current_company" id="current_company" class="form-input w-full">
        </div>

        <div class="mb-4">
            <label for="comment" class="block text-gray-600 font-semibold">Comment:</label>
            <textarea name="comment" id="comment" class="form-textarea w-full"></textarea>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-600 font-semibold">Status:</label>
            <select name="status" id="status" class="form-select w-full">
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit Feedback</button>
        </div>
    </form> --}}


    <div class="bg-white px-6 py-12 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-xl flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900">Let's Talk</h1>
            <p class="mt-3 text-lg text-gray-600">Feature request? Suggestion? or maybe you'd like to be our critic! Here's a
                form just for that.</p>
        </div>
        <form class="mx-auto mt-16 max-w-xl sm:mt-20" action="{{ route('store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first_name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                    <div class="mt-2.5">
                        <input required="" type="text" name="first_name" id="first_name" autocomplete="organization"
                            placeholder="Your First Name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                        <input required="" type="text" name="last_name" id="last_name" autocomplete="organization"
                            placeholder="Your Last Name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Current Company
                        Name</label>
                    <div class="mt-2.5">
                        <input required="" type="text" name="current_company" id="company"
                            autocomplete="organization" placeholder="Your Current Company Name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Current
                        Position</label>
                    <div class="mt-2.5">
                        <input required="" type="text" name="current_position" id="company"
                            autocomplete="organization" placeholder="Your Current Position"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input required="" type="email" name="email" id="email" autocomplete="email"
                            placeholder="Your Email Address"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                {{-- <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
                    <div class="mt-2.5">
                        <input required="" type="tel" name="phone" id="phone" autocomplete="tel"
                            placeholder="Your Phone Number"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div> --}}
                <div class="sm:col-span-2">
                    <label for="comment" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea required="" name="comment" id="comment" rows="4" placeholder="Share your thoughts..."
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <a href="{{route('home')}}" class="text-center bg-blue-600 text-white rounded-sm py-2 w-full block">Back</a>
                <button type="submit" class="bg-blue-600 text-white rounded-sm py-2 w-full block">Submit →</button>
            </div>
        </form>
    </div>
@endsection
