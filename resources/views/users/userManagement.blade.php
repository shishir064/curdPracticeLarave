@extends('layouts.dashboard')

{{-- @include('title', 'User Management') --}}
@section('content')

<section class="p-6">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-5">
            User Details
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full border border-gray-300">
                <h3 class="text-2xl mb-4">Mrs/Mr <span class="font-bold">{{  $users[0]->name }}</span></h3>

                <thead>

                    <tr class="bg-gray-200">

                        <th class="border p-3">SN</th>

                        <th class="border p-3">Username</th>

                        <th class="border p-3">Email</th>

                        <th class="border p-3">Phone</th>

                        <th class="border p-3">Address</th>

                        <th class="border p-3">Role</th>

                        <th class="border p-3">Date Of Birth</th>

                        <th class="border p-3">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                    <tr class="hover:bg-gray-100">

                        <td class="border p-3">
                            {{ $loop->iteration }}
                        </td>

                        <td class="border p-3">
                            {{ $user->name }}
                        </td>

                        <td class="border p-3">
                            {{ $user->email }}
                        </td>

                        <td class="border p-3">
                            {{-- {{ $user->phone }} --}}
                        </td>

                        <td class="border p-3">
                            {{-- {{ $user->address }} --}}
                        </td>

                        <td class="border p-3">
                            {{-- {{ $user->role }} --}}
                        </td>

                        <td class="border p-3">
                            {{-- {{ $user->date_of_birth }} --}}
                        </td>

                        <td class="border p-3 text-center">
                            <a href="#" class="text-indigo-600 hover:underline pr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Delete</a>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection