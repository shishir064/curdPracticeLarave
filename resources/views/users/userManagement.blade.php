@extends('layouts.dashboard')

{{-- @include('title', 'User Management') --}}
@section('content')
    <section class="p-6">

        <div class="bg-white shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-5">
                User Details
            </h2>

            <div class="overflow-x-auto">

                <div class=" flex items-center justify-between mb-6">
                    <h3 class="text-2xl mb-4">Mrs/Mr <span class="font-bold">{{ $users[0]->name }}</span></h3>

                    <form action="{{ route('indexx') }}" method="GET">
                        <span><input type="text" name="search" placeholder="search user"
                                class="border rounded py-1 px-3"></span>
                        <button class="px-3 py-1 bg-black rounded text-white">Search</button>
                    </form>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="$$btn p-4 bg-indigo-600 text-white rounded" onclick="my_modal_3.showModal()">Add
                        Details</button>
                    <dialog id="my_modal_3" class="$$modal rounded w-11/12 max-w-3xl">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <div class="$$modal-box p-6 ">
                            <h2 class="text-2xl font-bold text-center mb-6">
                                User Information Form
                            </h2>

                            <form action="{{ route('user.store') }}" method="POST" class="space-y-4"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Email -->
                                {{-- <div>
                                    <label class="block mb-1 font-medium">
                                        Email
                                    </label>
                                    <input type="email" name="email" placeholder="Enter your email"
                                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div> --}}

                                <!-- Address -->
                                <div>
                                    <label class="block mb-1 font-medium">
                                        Address
                                    </label>
                                    <textarea name="address" placeholder="Enter your address" rows="3"
                                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label class="block mb-1 font-medium">
                                        Phone
                                    </label>
                                    <input type="tel" name="phone" placeholder="Enter phone number"
                                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Role -->
                                <div>
                                    <label class="block mb-1 font-medium">
                                        Role
                                    </label>
                                    <input type="text" name="role" placeholder="Enter your role"
                                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <!-- Date of Birth -->
                                <div>
                                    <label class="block mb-1 font-medium">
                                        Date of Birth
                                    </label>
                                    <input type="date" name="dob"
                                        class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>


                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                                    Submit
                                </button>

                            </form>
                        </div>
                    </dialog>

                </div>
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <table class="w-full border border-gray-300">


                    <thead>

                        <tr class="bg-gray-200">

                            <th class="border p-3">SN</th>

                            <th class="border p-3">Username</th>

                            <th class="border p-3">Email</th>

                            <th class="border p-3">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($users as $user)
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

                                <td class="border p-3 text-center">
                                    <a href="{{ route('user.profile', $user->id) }}"
                                        class="text-indigo-600 hover:underline pr-3">View</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </section>
@endsection
