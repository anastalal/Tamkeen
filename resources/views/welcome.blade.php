<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl"  >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Primary Meta Tags -->
        <title>محلل الاهتمامات | اكتشف اهتمامك المهني</title>
        <meta name="title" content="محلل الاهتمامات | اكتشف اهتمامك المهني" />
        <meta name="description" content="محلل الاهتمامات هو أداة تساعدك في التعرف على اهتماماتك في المجال المهني، واستكشاف خياراتك المهنية التي من الممكن أن تحقق لك الرضا والنمو المهني المتوافق مع خبراتك ومهاراتك." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://tmkeen.coderans.pro/" />
        <meta property="og:title" content="محلل الاهتمامات | اكتشف اهتمامك المهني" />
        <meta property="og:description" content="محلل الاهتمامات هو أداة تساعدك في التعرف على اهتماماتك في المجال المهني، واستكشاف خياراتك المهنية التي من الممكن أن تحقق لك الرضا والنمو المهني المتوافق مع خبراتك ومهاراتك." />
        <meta property="og:image" content="https://tmkeen.coderans.pro/assets/img/logo.png" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://tmkeen.coderans.pro/" />
        <meta property="twitter:title" content="محلل الاهتمامات | اكتشف اهتمامك المهني" />
        <meta property="twitter:description" content="محلل الاهتمامات هو أداة تساعدك في التعرف على اهتماماتك في المجال المهني، واستكشاف خياراتك المهنية التي من الممكن أن تحقق لك الرضا والنمو المهني المتوافق مع خبراتك ومهاراتك." />
        <meta property="twitter:image" content="https://tmkeen.coderans.pro/assets/img/logo.png" />

        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}?v={{ time() }}">

        <script>
            if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.querySelector('html').classList.add('dark');
            } else {
                document.querySelector('html').classList.remove('dark');
            }
        </script>

<!-- Meta Tags Generated with https://metatags.io -->

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
    <div class="hidden border-green-300 border-orange-300 border-purple-300 border-blue-300 border-yellow-300 border-pink-300"></div>

       <x-nav/>
        <main class="font-Rubikss">
            <x-hero2/>


            
           {{-- <livewire:questions/> --}}
          
           {{-- <livewire:quiz/> --}}
        </main>
        <div class="fixed left-0 top-0 -z-10 h-full w-full">
            <div class="relative hidden dark:block h-full w-full bg-white dark:bg-slate-950"><div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div></div>

            <div class="absolute dark:hidden inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]"><div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-fuchsia-400 opacity-20 blur-[100px]"></div></div>
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
    </script>
    </body>
</html>
