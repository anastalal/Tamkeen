
@props(['titel'=> '' , 'text' =>''])
<div class='hs-accordion border border-solid border-gray-300 p-4 rounded-xl transition duration-500 hs-accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4' id='basic-heading-one-with-icon'>
    <button class='hs-accordion-toggle group  inline-flex items-center justify-between text-left text-base leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 ' aria-controls='basic-collapse-one-with-icon'>
     <h5>
    {{ $title }}    
    </h5> 
     <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
       <path d='M6 12H18M12 18V6' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
     </svg>
     <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
       <path d='M6 12H18' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
     </svg>
    </button>
    <div id='basic-collapse-one-with-icon' class='hs-accordion-content w-full  overflow-hidden pr-4' aria-labelledby='basic-heading-one'>
     <p class='text-base text-gray-900 leading-6'>
        {{ $slot }}
     </p>
    </div>
    </div>