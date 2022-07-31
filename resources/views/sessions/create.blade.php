<!-- resources/views/sessions/create.blade.php -->
 
<x-layout>
  <x-slot:title>
      Login
  </x-slot>

  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
      <h1 class="text-center font-bold text-xl">Log In!</h1>

      <form action="/login" method="post">
        @csrf
        
        <div class="mb-6">
          <label for="email">
            Email
          </label>
          <input class="border border-gray-400 p-2 w-full"
            type="email" 
            name="email" 
            id="email"
            value="{{ old('email') }}"
            required>
        </div>

        <div class="mb-6">
          <label for="password">
            Password
          </label>
          <input class="border border-gray-400 p-2 w-full"
            type="password" 
            name="password" 
            id="password"
            required>

            @error('password')
                <p class="">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
          <button class="border border-gray-400 py-2 px-4 bg-blue-400 hover:bg-blue-500 text-white"
            type="submit">
            Log In
          </button>
        </div>

        {{-- Show form errors --}}
        @if ($errors->any())
          <ul class="text-red-500 text-xs mt-2 list-none p-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif
      </form>
    </main>
  </section>
</x-layout>