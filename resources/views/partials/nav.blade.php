<header class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-lg shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-indigo-600">Brand.</h1>

        <nav class="hidden md:flex items-center gap-8 font-medium">
            @auth
                <a href="{{ route('createpost') }}" class="px-5 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition">
                    Create Post
                </a>
                <a href="{{ route('viewpost') }}" class="px-5 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition">
                    View Post
                </a>

                <a href=""
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="px-5 py-2 rounded-xl border border-indigo-600 text-indigo-600 hover:bg-indigo-50 transition">
                    Logout
                </a>

                <form id="logout-form" action="" method="POST" class="hidden">
                    @csrf
                </form>

                <a href="{{ route('category.form') }}" class="px-5 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition">
                    Add Category
                </a>
            @endauth

            @guest
              
            <a href="{{ route('home') }}" class="hover:text-indigo-600 transition">Home</a>
            <a href="#features" class="hover:text-indigo-600 transition">Features</a>
            <a href="#about" class="hover:text-indigo-600 transition">About</a>
            <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
          </nav>
          
          
          <div class="hidden md:flex gap-4">
            <a href="{{ route('login.form') }}"
            class="px-5 py-2 rounded-xl border border-indigo-600 text-indigo-600 hover:bg-indigo-50 transition">
                Login
              </a>
              <button class="px-5 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition">
                Get Started
              </button>
            </div>
            @endguest

        <button id="menuBtn" class="md:hidden text-3xl">☰</button>
      </div>
      
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
        <div class="flex flex-col p-6 gap-4">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <button class="px-5 py-2 rounded-xl border border-indigo-600 text-indigo-600">
                Login
            </button>
            <button class="px-5 py-2 rounded-xl bg-indigo-600 text-white">
                Get Started
            </button>
        </div>
    </div>
</header>
