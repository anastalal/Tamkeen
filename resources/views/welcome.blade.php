<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" /></>
       
  
    </head>
    <body>
        <main class="font-Rubikss">
            <x-hero/>
           {{-- <livewire:questions/> --}}
           <livewire:quiz/>
        </main>
        <div class="fixed left-0 top-0 -z-10 h-full w-full">
            <div class="relative h-full w-full bg-slate-950"><div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div></div>
        </div>
    </body>
</html>
