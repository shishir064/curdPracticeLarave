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

                    <th class="px-6 py-3 text-left border-b">
                        Title
                    </th>


                    <th class="px-6 py-3 text-left border-b">
                        Description
                    </th>

                    <th class="px-6 py-3 text-center border-b">
                        Action
                    </th>
                </tr>

            </thead>

            <tbody>

                @foreach($testposts as $testpost)

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4 border-b">
                        {{ $loop->iteration }}
                    </td>

                    <td class="px-6 py-4 border-b">
                        {{ $testpost->title }}
                    </td>


                    <td class="px-6 py-4 border-b">
                        {{ Str::limit($testpost->body,50) }}
                    </td>
                   

                    <td class="px-6 py-4 border-b text-center flex gap-4">

                        <a
                            href="{{  route('test.view.post.edit', $testpost->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            Edit
                        </a>
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