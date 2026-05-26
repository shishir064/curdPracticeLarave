@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form action=" {{route('login') }}" id="loginForm" method="POST" class="space-y-5  w-[30vw] ">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
          <input type="email" placeholder="Enter your email"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" name="email" />
            @error('email')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
          <input type="password" placeholder="Enter your password"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" name="password" />
            @error('password')
                <h1>{{ $message }}</h1>
            @enderror
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2 text-gray-600">
            <input type="checkbox" class="rounded" />
            Remember me
          </label>
          <a href="#" class="text-indigo-600 hover:underline">Forgot Password?</a>
        </div>

        <button
          class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-xl font-semibold transition duration-300">
          Login
        </button>

        <div class="text-center text-gray-400">or continue with</div>

        <div class="grid grid-cols-2 gap-4">
          <button type="button"
            class="border border-gray-300 rounded-xl py-3 font-medium hover:bg-gray-100 transition">
            Google
          </button>
          <button type="button"
            class="border border-gray-300 rounded-xl py-3 font-medium hover:bg-gray-100 transition">
            GitHub
          </button>
        </div>

        <div class="text-center text-gray-400">
          Don't have an account yet?
          <a href="{{ route('signup.form') }}" class="text-indigo-600 hover:underline">Sign Up</a>
        </div>
      </form>
@endsection
