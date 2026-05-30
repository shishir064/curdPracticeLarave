@extends('layouts.dashboard')
@section('title', 'Create Post')

@section('content')
    <div class="w-full  px-4">

        <h1 class="text-3xl font-bold text-center mb-8">
            Create Tags
        </h1>

        <form action="{{ route('tag.store')}}" method="POST" class="space-y-5" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="text-green-600 bg-green-100 px-4 py-3 rounded">
                    <h1>{{ session('success') }}</h1>
                </div>
            @endif
            <!-- Title -->
            <div>
                <label class="block mb-2 font-semibold">
                    Add Tag
                </label>

                <input type="text" name="tag" placeholder="Enter Tag"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Add Tag
            </button>

        </form>
    </div>
@endsection
