<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="dark">
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
        <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://tmkeen.coderans.pro/" />
        <meta property="twitter:title" content="محلل الاهتمامات | اكتشف اهتمامك المهني" />
        <meta property="twitter:description" content="محلل الاهتمامات هو أداة تساعدك في التعرف على اهتماماتك في المجال المهني، واستكشاف خياراتك المهنية التي من الممكن أن تحقق لك الرضا والنمو المهني المتوافق مع خبراتك ومهاراتك." />
        <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

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
        <main class="font-Rubikss">
            <x-hero/>
           {{-- <livewire:questions/> --}}
           <div class=" text-gray-400 p-4">
            <h1 class="text-2xl md:text-4xl mb-2 text-center text-purple-400 font-bold">اكتشف اهتمامك المهني</h1>
            <p class="text-center">اختر "مهتم" أو "غير مهتم" لكل من الأسئلة التالية لتحديد اهتماماتك المهنية:</p>
        </div>
           <livewire:quiz/>
        </main>
        <div class="fixed left-0 top-0 -z-10 h-full w-full">
            <div class="relative h-full w-full bg-slate-950"><div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div></div>
        </div>
    </body>
</html>
