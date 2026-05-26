@extends('layouts.app')

@section('title', 'Modern Landing Page')

@include('partials.nav')
@section('content')
   <!-- Hero Section -->
  <section id="home" class="pt-32 pb-20 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14 items-center">
        @if (session('success'))
          <div>{{session('success')}}</div>
        @endif
      
      <div>
        <span class="bg-indigo-100 text-indigo-600 px-4 py-2 rounded-full text-sm font-semibold">
          🚀 Modern Web Solution
        </span>

        <h2 class="text-5xl md:text-6xl font-bold leading-tight mt-6">
          Build Your Dream
          <span class="text-indigo-600">Website Faster</span>
        </h2>

        <p class="text-lg text-gray-600 mt-6 leading-relaxed">
          Create stunning websites and modern applications with beautiful UI components and responsive layouts.
        </p>

        <div class="flex flex-wrap gap-4 mt-8">
          <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-semibold transition shadow-lg shadow-indigo-200">
            Start Free
          </button>

          <button class="border border-gray-300 hover:bg-gray-100 px-8 py-4 rounded-2xl font-semibold transition">
            Watch Demo
          </button>
        </div>

        <div class="flex items-center gap-8 mt-10">
          <div>
            <h3 class="text-3xl font-bold">10K+</h3>
            <p class="text-gray-500">Users</p>
          </div>

          <div>
            <h3 class="text-3xl font-bold">99%</h3>
            <p class="text-gray-500">Satisfaction</p>
          </div>

          <div>
            <h3 class="text-3xl font-bold">24/7</h3>
            <p class="text-gray-500">Support</p>
          </div>
        </div>
      </div>

      <div class="relative">
        <div class="absolute inset-0 bg-indigo-500 blur-3xl opacity-20 rounded-full"></div>

        <div class="relative bg-white rounded-3xl shadow-2xl p-6 border border-gray-100">
          <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop"
            alt="dashboard"
            class="rounded-2xl w-full h-[450px] object-cover"
          />
        </div>
      </div>

    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-4xl font-bold">Amazing Features</h2>
      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        Everything you need to create modern and powerful digital experiences.
      </p>

      <div class="grid md:grid-cols-3 gap-8 mt-16">

        <div class="bg-gray-50 p-8 rounded-3xl hover:-translate-y-2 transition shadow-sm hover:shadow-xl">
          <div class="text-5xl">⚡</div>
          <h3 class="text-2xl font-semibold mt-6">Fast Performance</h3>
          <p class="text-gray-600 mt-4">
            Optimized for speed and smooth performance across all devices.
          </p>
        </div>

        <div class="bg-gray-50 p-8 rounded-3xl hover:-translate-y-2 transition shadow-sm hover:shadow-xl">
          <div class="text-5xl">🎨</div>
          <h3 class="text-2xl font-semibold mt-6">Modern Design</h3>
          <p class="text-gray-600 mt-4">
            Beautiful layouts and UI components that stand out.
          </p>
        </div>

        <div class="bg-gray-50 p-8 rounded-3xl hover:-translate-y-2 transition shadow-sm hover:shadow-xl">
          <div class="text-5xl">🔒</div>
          <h3 class="text-2xl font-semibold mt-6">Secure System</h3>
          <p class="text-gray-600 mt-4">
            Built with modern security practices to keep your data safe.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-20 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14 items-center">

      <img
        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
        alt="team"
        class="rounded-3xl shadow-xl"
      />

      <div>
        <h2 class="text-4xl font-bold leading-tight">
          Designed For Startups,
          Businesses & Creators
        </h2>

        <p class="text-gray-600 mt-6 leading-relaxed text-lg">
          Launch your online presence with a professional and responsive landing page that helps grow your audience and business.
        </p>

        <div class="space-y-5 mt-8">
          <div class="flex gap-4">
            <div class="text-green-500 text-2xl">✔</div>
            <p class="text-gray-700">Fully responsive on all devices</p>
          </div>

          <div class="flex gap-4">
            <div class="text-green-500 text-2xl">✔</div>
            <p class="text-gray-700">Modern UI & smooth animations</p>
          </div>

          <div class="flex gap-4">
            <div class="text-green-500 text-2xl">✔</div>
            <p class="text-gray-700">Easy to customize and scalable</p>
          </div>
        </div>

        <button class="mt-10 bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-semibold transition">
          Learn More
        </button>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 px-6">
    <div class="max-w-6xl mx-auto bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-12 text-center text-white shadow-2xl">
      <h2 class="text-4xl md:text-5xl font-bold leading-tight">
        Ready To Build Something Amazing?
      </h2>

      <p class="mt-6 text-lg opacity-90 max-w-2xl mx-auto">
        Join thousands of users already using our platform to create beautiful websites.
      </p>

      <button class="mt-10 bg-white text-indigo-600 hover:bg-gray-100 px-8 py-4 rounded-2xl font-bold transition">
        Get Started Now
      </button>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-20 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-bold">Contact Us</h2>
      <p class="text-gray-600 mt-4">
        Have questions? We would love to hear from you.
      </p>

      <form class="mt-12 grid gap-6">
        <input
          type="text"
          placeholder="Your Name"
          class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />

        <input
          type="email"
          placeholder="Your Email"
          class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />

        <textarea
          rows="5"
          placeholder="Your Message"
          class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        ></textarea>

        <button
          class="bg-indigo-600 hover:bg-indigo-700 text-white py-4 rounded-2xl font-semibold transition">
          Send Message
        </button>
      </form>
    </div>
  </section>
@endsection

@include('partials.footer')