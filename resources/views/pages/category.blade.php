@extends('layouts.dashboard')
@section('title', 'Create Post')

@section('content')
    <div class="w-full  px-4">

        <h1 class="text-3xl font-bold text-center mb-8">
            Create Blog
        </h1>

        <form action="{{ route('category.store') }}" method="POST" class="space-y-5" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="text-green-500">
                    <h1>{{ session('success') }}</h1>
                </div>
            @endif
            <!-- Title -->
            <div>
                <label class="block mb-2 font-semibold">
                    Add Category
                </label>

                <input type="text" name="category" placeholder="Enter Category"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500">
            </div>

           

            <!-- Description -->
            {{-- <div>
                <label class="block mb-2 font-semibold">
                    Add Category
                </label> --}}
                {{-- <select class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500" name="" id="">
                    <option value="">Select Category</option>
                    <option value="">Select Category</option>
                    <option value="">Select Category</option> --}}
                    
                    {{-- <option
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
                    {{-- @endforeach  --}}
                 {{-- </select>
            </div> --}}

            <!-- Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Add Category
            </button>

        </form>
    </div>
@endsection
