<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white p-6">

        <h1 class="text-2xl font-bold mb-10">
             Admin
        </h1>

        <nav class="space-y-4">

            <a href="#" class="block p-3 rounded hover:bg-blue-700">
                Dashboard
            </a>

            <a href="{{ route('category.form') }}" class="block p-3 rounded hover:bg-blue-700">
                Add Category
            </a>
            <a href="{{ route('tag.form') }}" class="block p-3 rounded hover:bg-blue-700">
                Add Tags
            </a>

            <a href="{{ route('createpost') }}" class="block p-3 rounded hover:bg-blue-700">
                Create Post
            </a>
            <a href="{{ route('viewpost') }}" class="block p-3 rounded hover:bg-blue-700">
                View Post
            </a>

            <a href="{{ route('indexx') }}" class="block p-3 rounded hover:bg-blue-700">
                Users
            </a>

            <a href="#" class="block p-3 rounded hover:bg-blue-700">
                Settings
            </a>

        </nav>

    </aside>

    <!-- Main Content -->
    <main class="flex-1">

        <!-- Navbar -->
        <header class="bg-white shadow p-5 flex justify-between">

            <h2 class="text-2xl font-bold">
                Dashboard
            </h2>

            <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-red-600 px-4 py-2 rounded text-white" type="submit">Logout</button>
                </form>

        </header>

        <!-- Cards -->
        @yield('content')

    </main>

</div>

</body>
</html>