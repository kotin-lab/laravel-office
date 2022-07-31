<!-- resources/views/components/flash.blade.php -->

@if (session()->has('success'))
  <div 
    x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, 4000)"
    class="fixed bg-blue-500 text-white text-sm py-2 px-4 rounded-xl bottom-2 right-3">
    {{ session('success') }}
  </div>
@endif