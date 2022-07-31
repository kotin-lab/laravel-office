<!-- resources/views/components/layout.blade.php -->
 
<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        
        @vite('resources/css/app.css')

        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    </head>
    <body>
      <x-header />

      {{ $slot }}

      @stack('scripts')
      <x-flash />
    </body>
</html>