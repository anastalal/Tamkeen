@props(['title' => '' , 'text' => ''])
<div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
    <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
    <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
    <div class="relative p-5 bg-white rounded-sm">
      <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
        <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full bg-indigo-50 lg:mb-0">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="font-semibold leading-5">{{ $title }}</h6>
      </div>
      <p class="mb-2 text-sm text-gray-900">
      {{ $text }}
      </p>
      <a href="/" aria-label="" class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
  </div>