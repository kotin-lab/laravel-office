<!-- resources/views/register/create.blade.php -->
 
<x-layout>
  <x-slot:title>
      Register
  </x-slot>

  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
      <h1 class="text-center font-bold text-xl">Registration</h1>

      <form action="/register" method="post">
        @csrf
        
        <div class="mb-6">
          <label for="name">
            Name
          </label>
          <input class="border border-gray-400 p-2 w-full"
            type="text" 
            name="name" 
            id="name"
            value="{{ old('name') }}"
            required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
          <label for="username">
            Username
          </label>
          <input class="border border-gray-400 p-2 w-full"
            type="text" 
            name="username" 
            id="username"
            value="{{ old('username') }}"
            required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
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

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
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
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
          <button class="border border-gray-400 py-2 px-4 bg-blue-400 hover:bg-blue-500 text-white"
            type="submit">
            Register
          </button>
        </div>
      </form>
    </main>
  </section>
</x-layout>