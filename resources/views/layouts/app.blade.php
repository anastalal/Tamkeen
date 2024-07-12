<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}?v={{ time() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script>
            if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.querySelector('html').classList.add('dark');
            } else {
                document.querySelector('html').classList.remove('dark');
            }
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            @font-face{
                src: url({{ asset('font/PingARLT-Regular.woff2') }});
                /* src: url(/font/Ping.ttf) */
                font-family: Ping2;
                
            }
            body {
          font-family: Ping2;
        }
           </style>
    </head>
    <body class=" antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
        
        <script >
            document.addEventListener('livewire:navigated', () => { 
                console.log('anad');
          const lightSwitches = document.querySelectorAll('.light-switch');
          if (lightSwitches.length > 0) {
            lightSwitches.forEach((lightSwitch, i) => {
              if (localStorage.getItem('dark-mode') === 'true') {
                lightSwitch.checked = true;
                console.log('anad');
              }
              lightSwitch.addEventListener('change', () => {
                  console.log('anad');
                const { checked } = lightSwitch;
                lightSwitches.forEach((el, n) => {
                  if (n !== i) {
                    el.checked = checked;
                  }
                });
                if (lightSwitch.checked) {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('dark-mode', true);
                } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('dark-mode', false);
                }
              });
            });
          }
     })
          
          </script>
    </body>
</html>
