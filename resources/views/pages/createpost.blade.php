@extends('layouts.dashboard')
@section('title', 'Create Post')

@section('content')

    <div class="w-full  px-4">

        <h1 class="text-3xl font-bold text-center mb-8">
            Create Blog
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

        <form action="{{ route('createpost') }}" method="POST" class="space-y-5" enctype="multipart/form-data">
            @csrf
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
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block mb-2 font-semibold">
                    Category
                </label>
                
                <x-blog-category :categories="$categories"/>
                
            </div>
            <div>
                <label class="block mb-2 font-semibold">
                    Select Tag
                </label>
                
                <x-tag-category :tags="$tags"/>
                
            </div>

            <div>
                <label class="block mb-2 font-semibold">Image</label>
                <input type="file" name="image" class="w-full border border-gray-300 rounded-lg p-3">
                {{-- @error('image')
                    {{ $message }}
                @enderror --}}
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-2 font-semibold">
                    Content
                </label>

                <textarea name="body" rows="5" placeholder="Enter blog description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Submit Blog
            </button>

        </form>
    </div>
@endsection
