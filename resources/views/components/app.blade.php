@props([
    'title' => 'تمكين هب | من التكوين إلى التمكين',
    'description' =>
        'نسعى في تمكين هب لتوفير حلول مخصصة ومبتكرة لتدريب وتطوير المهنيين حيث نساهم في تمكين الشركات من تحقيق أهدافها وتجاوز تحديات السوق عبر تعزيز مهارات وقدرات موظفيها . ونلتزم بتقديم حلول مبتكرة وفعالة تلبي احتياجات سوق العمل السعودي وتسهم في تحقيق رؤية المملكة ',
])
{{-- بسم الله الرحمن الرحيم --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://tamkeenheb.sa/favicon.ico" type="image/x-icon">
    <!-- Primary Meta Tags -->
    <!-- Primary Meta Tags -->
    <title> هب | من التكوين إلى التمكين</title>
    <title>{{ $title }}</title>
    <meta name="title" content="{{ $title }}" />
    <meta name="description" content="{{ $description }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tamkeenheb.sa" />
    <meta name="og:title" content="{{ $title }}" />
    <meta name="og:description" content="{{ $description }}" />
    <meta property="og:image" content="https://tamkeenheb.sa/assets/img/logo2.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://tamkeenheb.sa" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta property="twitter:image" content="https://tamkeenheb.sa/assets/img/logo2.png" />

    <!-- Meta Tags Generated with https://metatags.io -->

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}?v={{ time() }}">

    <script>
        if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>

    <!-- Meta Tags Generated with https://metatags.io -->

    <style>
        @font-face {
            src: url({{ asset('font/PingARLT-Regular.woff2') }});
            /* src: url(/font/Ping.ttf) */
            font-family: Ping2;

        }

        body {
            font-family: Ping2;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])




</head>

<body>
    <div
        class="hidden border-green-300 border-orange-300 border-purple-300 border-blue-300 border-yellow-300 border-pink-300">
    </div>


    
    <x-nav />
    <main class="font-Rubikss">
        {{ $slot }}

        
    </main>

    <div class="fixed left-0s  bottom-0 start-1/2s z-[60] w-full  h-fulsl">

        <div id="cookies-simple-with-dismiss-button" class=" transform -translate-x-1/2s z-[60] sm:max-w-4xl mx-auto p-6">
            <!-- Card -->
            <div class="p-4 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-900 dark:border-neutral-800">
              <div class="flex justify-between items-center gap-x-5 sm:gap-x-10">
                <h2 class="text-sm text-gray-600 dark:text-neutral-400">
                الموقع قيد التطوير حالياً
                </h2>
                <button type="button" class="p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:hover:bg-white/20 dark:text-white dark:hover:text-white" data-hs-remove-element="#cookies-simple-with-dismiss-button">
                  <span class="sr-only">Dismiss</span>
                  <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                </button>
              </div>
            </div>
            <!-- End Card -->
          </div>
    </div>
    


    <div class="fixed left-0 top-0 -z-10 h-full w-full">
        <div class="relative hidden dark:block h-full w-full bg-white dark:bg-slate-950">
            <div
                class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]">
            </div>
        </div>

        <div
            class="absolute dark:hidden inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]">
            <div
                class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-fuchsia-400 opacity-20 blur-[100px]">
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script>
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
                    const {
                        checked
                    } = lightSwitch;
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
    </script>
</body>

</html>
