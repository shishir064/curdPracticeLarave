@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 px-4">

        <div class="bg-white shadow-lg rounded-lg p-6 w-[65vw]">

            <h2 class="text-2xl font-bold mb-6">
                Edit Post
            </h2>

            <form action="{{ route('updatepost', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-5">

                    <label class="block mb-2 font-medium">
                        Title
                    </label>

                    <input type="text" name="title" value=" {{ $post->title }}"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

                    @error('title')
                        <p class="text-red-500 text-sm mt-1">

                        </p>
                    @enderror

                </div>

                <!-- Image -->
                <div class="mb-5">
                    <label class="block mb-2 font-medium">
                        Image
                    </label>
                    <img src="{{ asset('storage/' . $post->image) }}" class="w-16 h-16" alt="">
                    <input type="file" name="image">
                </div>


                <div>
                    <label class="block mb-2 font-medium">
                        Category
                    </label>
                    <select name="category_id"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                {{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class=" ">
                    <label class="block mb-2 font-medium">
                        Select Tag
                    </label>
                    @foreach ($tags as $tag)
                        <label class="flex items-center gap-2">
                            {{-- {{  in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'checked' : ''}} --}}
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'checked' : '' }} class="rounded">
                            <span>{{ $tag->tag }}</span>
                        </label>
                    @endforeach
                </div>

                <!-- Body -->
                <div class="mb-5">

                    <label class="block mb-2 font-medium">
                        Body
                    </label>

                    <textarea name="body" rows="5"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ $post->body }}</textarea>

                    @error('body')
                        <p class="text-red-500 text-sm mt-1">

                        </p>
                    @enderror

                </div>

                <div class="flex gap-3">

                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">

                        Edit

                    </button>

                    <a href="" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">

                        Cancel

                    </a>

                </div>

            </form>

        </div>

    </div>
@endsection
