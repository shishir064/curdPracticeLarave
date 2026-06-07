@extends('layouts.dashboard')
@section('title', 'Create Post')

@section('content')

    <div class="w-full  px-4">

        @if (session('success'))
            <div class="text-green-600 bg-green-100 px-4 py-3 rounded">
                <h1>{{ session('success') }}</h1>
            </div>
        @endif
<h1>hello</h1>
        <h1 class="text-3xl font-bold text-center mb-8">
            {{ isset($testpost) ? 'Edit Blog' : 'Create Blog' }}
        </h1>


        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($testpost) ? route('test.post.update', $testpost->id) : route('test.post.store') }}"
            method="POST" class="space-y-5" enctype="multipart/form-data">
            @csrf

            @if (isset($testpost))
                @method('PUT')
            @endif

            @if (session('success'))
                <div class="text-green-500">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Title -->
            <div>
                <label class="block mb-2 font-semibold">
                    Title
                </label>

                <input type="text" name="title" placeholder="Enter blog title"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('title', $testpost->title ?? '') }}">

                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>



            <div>
                <label class="block
                    mb-2 font-semibold">
                    Content
                </label>

                <textarea name="body" rows="5" placeholder="Enter blog description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500">{{ old('body', $testpost->body ?? '') }}</textarea>

                @error('body')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                {{ isset($testpost) ? 'Update Post' : 'Save Post' }}
            </button>

        </form>
    </div>
@endsection
