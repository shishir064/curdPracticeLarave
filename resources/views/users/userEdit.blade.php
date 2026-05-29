@extends('layouts.dashboard')

@section('content')

<section class="p-6">

    <div class="w-full mx-auto bg-white shadow-lg rounded-xl p-8">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold">
                User Details
            </h2>

            <a href="{{ url()->previous() }}"
               class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                Back
            </a>
        </div>

        <!-- Form -->
        <form action="{{ route('user.profile.store', $user->id) }}" method="POST" class="space-y-6">
            @csrf

            <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
            <!-- Name -->
            <div>
                <label for="name" class="block mb-2 text-lg font-semibold">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $user->name ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    
                >
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 text-lg font-semibold">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $user->email ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    
                >
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block mb-2 text-lg font-semibold">
                    Address
                </label>

                <textarea
                    name="address"
                    id="address"
                    rows="3"
                    placeholder="Enter your address"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    
                >{{ $user->userDetail?->address ?? '' }}</textarea>
            </div>

            <!-- Gender -->
           

            <!-- Date of Birth -->
            <div>
                <label for="dob" class="block mb-2 text-lg font-semibold">
                    Date of Birth
                </label>

                <input
                    type="date"
                    name="dob"
                    id="dob"
                    value="{{ $user->dob ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    
                >
            </div>

            <!-- Submit -->
            <div class="flex w-full justify-end">
                <button type="submit"
                    class="w-fit bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                    Update
                </button>
            </div>

        </form>

    </div>

</section>

@endsection