<div>
   
    @if ($showResults)
    <div class="hidden border-green-300 border-orange-300 border-purple-300 border-blue-300 border-yellow-300 border-pink-300"></div>
    <div class="result container mx-auto p-4 text-gray-200">
        <h2 class="text-center  text-purple-400 font-semibold text-2xl">نمطك هو: {{ $resultPattern->name }}</h2>
        <p>
           {!! $resultPattern->description !!}
        </p>
        <h3 class="text-center text-xl ext-2xl text-purple-400 font-semibold">المساحات الوظيفية:</h3>
        @foreach ($resultFunctionalAreas as $area)
            <h4 class="text-xl text-purple-400 font-semibold">{{ $area->name }}</h4>
            <p>هنا سوف تضهر الوظائف  في كل مساحة</p>
            <ul>
                @foreach ($area->jobs as $job)
                    <li>{{ $job->name }}</li>

                @endforeach
            </ul>
        @endforeach
    </div>    
        {{-- <button wire:click="resetQuiz">إعادة الاختبار</button> --}}
    @else
        <div class="grid gap-4 grid-cols-1 md:grid-cols-3 p-4">
            @foreach ($questionsToShow as $question)
                <x-question-card :question="$question" />
            @endforeach
        </div>
        <div class="flex justify-center gap-5 my-10">
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
                {{-- <button class="bg-gray-400"  wire:click="nextPage">التالي</button> --}}
            @else
                {{-- <button wire:click="nextPage">إنهاء</button> --}}
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
</div>
