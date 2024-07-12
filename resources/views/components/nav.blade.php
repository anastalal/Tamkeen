<header class=" fixed z-10 top-0 flex-wrap sm:justify-start sm:flex-nowrap w-full backdrop-blur-sm bg-white/30 text-sm py-2 dark:bg-neutral-800/30">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between" aria-label="Global">
      <a class="sm:order-1 flex-none text-xl font-semibold dark:text-white" href="#">
        <img src="{{ asset('assets/img/logo.png') }}" height="40" width="40" alt="Tamkeen logo">
      </a>
      <div class="sm:order-3 flex items-center gap-x-2">
        <div class="flex flex-col justify-center ml-3">
            <input id="light-switch" type="checkbox" name="light-switch" class="light-switch sr-only" />
            <label class="relative cursor-pointer p-2" for="light-switch">
                <svg class="dark:hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-slate-300" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
                    <path class="fill-slate-400" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
                </svg>
                <svg class="hidden dark:block" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-slate-400" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
                    <path class="fill-slate-500" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
                </svg>
                <span class="sr-only">Switch to light / dark version</span>
            </label>
        </div>
        <button type="button" class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg borderd border-gray-200 bg-whited text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
        {{-- <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
          Button
        </button> --}} 
      </div>
      <div id="navbar-alignment" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2">
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
          <a class="font-medium text-blue-500" href="#" aria-current="page"> الرئيسية</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">خدماتنا</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">تواصل معنا</a>
          <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">من نحن</a>
        </div>
      </div>
      <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 hs-collapse-open:origin-top hs-collapse-open:scale-y-100 lg:hidden dark:bg-gray-900/70 astro-UY3JLCBK"></div>
    </nav>
  </header>