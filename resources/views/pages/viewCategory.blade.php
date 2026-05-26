@extends('layouts.app')

@section('title', 'View Category')

@section('content')
<div class="max-w-5xl mx-auto mt-10 px-4">

    <div class="w-[65vw] wbg-white shadow-md rounded-lg overflow-hidden border">

        <table class="w-full border-collapse">

            <thead class="bg-gray-100">

                <tr>
                    <th class="px-6 py-3 text-left border-b">
                        SN
                    </th>

                    <th class="px-6 py-3 text-left border-b">
                        Title
                    </th>


                    <th class="px-6 py-3 text-left border-b">
                        Category Name
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

                @foreach($categories as $post)

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4 border-b">
                        {{ $loop->iteration }}
                    </td>

                    <td class="px-6 py-4 border-b">
                        {{ $post->title }}
                    </td>


                    <td class="px-6 py-4 border-b">
                        {{ $post->category }}
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
                            action=""
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