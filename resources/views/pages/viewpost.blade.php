@extends('layouts.dashboard')

@section('title', 'View Post')

@section('content')
<div class="w-full  mt-10 px-4">

    <div class=" wbg-white shadow-md rounded-lg overflow-hidden border">

       @if(session('success'))

        <div class="bg-green-500 text-white px-4 py-3">
            {{session('success')}}
        </div>

       @endif

        <table class="w-full border-collapse">

            <thead class="bg-gray-100">

                <tr>
                    <th class="px-6 py-3 text-left border-b">
                        SN
                    </th>

                    <th class="px-6 py-3 text-center border-b">
                        Image
                    </th>

                    <th class="px-6 py-3 text-left border-b">
                        Title
                    </th>


                    <th class="px-6 py-3 text-left border-b">
                        Description
                    </th>

                    <th class="px-6 py-3 text-center border-b">
                        Category
                    </th>

                    <th class="px-6 py-3 text-center border-b">
                        Edit
                    </th>

                    <th class="px-6 py-3 text-center border-b">
                        Delete
                    </th>
                </tr>

            </thead>

            <tbody>

                @foreach($posts as $post)

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4 border-b">
                        {{ $loop->iteration }}
                    </td>

                    <td class="text-center"><img src="{{ asset('storage/' . $post->image) }}" width="120">
                    </td>

                    <td class="px-6 py-4 border-b">
                        {{ $post->title }}
                    </td>


                    <td class="px-6 py-4 border-b">
                        {{ Str::limit($post->body,50) }}
                    </td>

                    <td class="px-6 py-4 border-b text-center">
                        {{ $post->category?->category }}
                    </td>

                    <td class="px-6 py-4 border-b text-center">

                        <a
                            href="{{  route('editpost', ['id' => $post->id]) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            Edit
                        </a>

                    </td>

                    <td class="px-6 py-4 border-b text-center">

                        <form
                            action=" {{ route('deletepost', ['id' => $post->id]) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>
@endsection