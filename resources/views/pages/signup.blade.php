@extends('layouts.app')

@section('title', 'Signup')
@section('content')
          <!-- Signup Form -->
      <form action="{{ route('signup') }}"  method="POST" id="signupForm" class="space-y-5 w-[30vw] ">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
          <input type="text" placeholder="Enter your full name"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-purple-500" name="name" />
            @error('name')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
          <input type="email" placeholder="Enter your email"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-purple-500" name="email" />
            @error('email')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
          <input type="password" placeholder="Create a password"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-purple-500" name="password" />
            @error('password')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
          <input type="password" placeholder="Confirm your password"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-purple-500" name="password_confirmation" />
            @error('password_confirmation')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <button
          class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-xl font-semibold transition duration-300">
          Create Account
        </button>

        <div class="text-center text-gray-400">
          Already have an account?
          <a href="{{ route('login.form') }}" class="text-indigo-600 hover:underline">Login</a>
        </div>
      </form>

@endsection