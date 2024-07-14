@props(['title' => '' ,'text'=> ''])
<div class="transition duration-300 transform hover:scale-105 group hover:shadow-xl max-w-md border border-color1-300 border-r-4 rounded-lg shadow-md  dark:border-color1-300 p-3">
    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full dark:bg-color1-900/50 bg-color1-200/30">
      <svg class="w-12 h-12 text-color1-500 dark:text-color1-300 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
      </svg>
    </div>
    <h6 class="mb-2 font-semibold dark:text-gray-200 leading-5"> {{ $title }} </h6>
    <p class="mb-1 text-sm text-gray-900 dark:text-gray-400">
      {{ $text }}
    </p>
  </div>