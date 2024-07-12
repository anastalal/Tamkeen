<div class="mt-[10vh]">
  
    @if (!$showResults)
    <div class=" text-gray-400  p-4">
        <h1 class="text-2xl md:text-4xl mb-2 text-center text-purple-400 font-bold">اكتشف اهتمامك المهني</h1>
        <p class="text-center">اختر "مهتم" أو "غير مهتم" لكل من الأسئلة التالية لتحديد اهتماماتك المهنية:</p>
    </div>
    @endif
   
    @if ($showResults)
    <div class="result container mx-auto p-4 dark:text-gray-200 text-gray-800">
        <h2 class="text-center  text-purple-400 font-semibolds text-2xl md:text-5xl font-bold my-3">نمطك هو: {{ $resultPattern->name }}</h2>
        <p>
           {!! $resultPattern->description !!}
        </p>
        <h3 class="text-center text-2xl md:text-4xl text-purple-400 font-semibold">المساحات الوظيفية:</h3>
        @foreach ($resultFunctionalAreas as $area)
        <div class="my-16">
            <h4 class="text-xls text-xl md:text-3xl text-purple-400 font-semibold">
                {{ $area->id }} -
                {{ $area->name }}</h4>
            <div class="my-2 w-full">
             {!! $area->description !!}
            </div>
            <div class="my-2">
                <h4 class="text-xl text-purple-400 font-semibold">
                    الاعمال التي تتناسب مع {{ $resultPattern->name }}
                    -  المساحة الوظيفية
                  ( {{ $area->name }} )
                </h4>
                @foreach ($area->jobs as $job)
                <div class="l lining-nums area my-4">
                    {!! $job->description !!}
                </div>
            @endforeach
            </div>
        </div>
        <hr class=" border-gray-700">
        @endforeach
        <div class="flex justify-center my-3">
            <button wire:click="resetQuiz"
            class="relative inline-flex w-48 items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
            <span
                class="absolute rotate-180 inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </span>
            <span
                class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">اعادة الاختبار</span>
            <span class="relative invisible">اعادة الاختبار</span>
        </button>
        </div>
    </div>    
        {{-- <button wire:click="resetQuiz">إعادة الاختبار</button> --}}
        
    @else
        <div class="grid gap-4 grid-cols-1 md:grid-cols-3 p-4">
            @foreach ($questionsToShow as $question)
                <x-question-card :question="$question" />
            @endforeach
        </div>
        <div class="flex justify-center gap-5 ">
            @if ($currentPage > 1)
                <button wire:click="previousPage"
                    class="relative inline-flex w-32 items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
                    <span
                        class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <span
                        class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">السابق</span>
                    <span class="relative invisible">السابق</span>
                </button>
            @endif
            @if ($currentPage < $totalPages)
                <button wire:click="nextPage"
                    class="relative inline-flex w-32 items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
                    <span
                        class="absolute rotate-180 inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <span
                        class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">التالي</span>
                    <span class="relative invisible">التالي</span>
                </button>
            @else
                <button wire:click="nextPage"
                class="relative inline-flex w-32 items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
                <span
                    class="absolute rotate-180 inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">ارسال</span>
                <span class="relative invisible">ارسال</span>
            </button>
            @endif
        </div>
    @endif
    @if (!$showResults)
    <div class="fixed bottom-1 size-12 ">
        <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <!-- Background Circle -->
            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-neutral-700" stroke-width="2"></circle>
            <!-- Progress Circle inside a group with rotation -->
            <g class="origin-center -rotate-90 transform">
                <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-color1-600 dark:text-color1-500" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="{{ 100 - (($currentPage / $totalPages) * 100) }}"></circle>
            </g>
        </svg>
        <!-- Percentage Text -->
        <div class="absolute top-1/2 end-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <span class="text-center text-sm font-bold text-gray-600 dark:text-gray-200">{{ floor(($currentPage / $totalPages) * 100) }}%</span>
            {{-- <span class="text-center text-sm font-bold text-gray-600 dark:text-gray-200">{{ (($currentPage / $totalPages) * 100) }}%</span> --}}
        </div>
    </div>     
    @endif
   
</div>
