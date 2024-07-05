@props(['question'=> []])

<div class="bg-gray-800s grid grid-rows-2 rounded-lg border text-white p-4 border-{{ $question->pattern->color }}-300">
    <h3 class="text-xl text-gray-400 font-semibold my-2 md:text-2xl">
        {{ $question->id }}-
        {{ $question->text }}
    </h3>
    <div class="flex flex-cols gap-2 items-center justify-center">
        <label for="agree-{{ $question->id }}" class="flex h-10 w-fits min-w-[8rem] cursor-pointer items-center justify-start gap-2 rounded-xl border border-slate-300 bg-slate-100 px-4 py-2 font-medium text-slate-700 has-[:disabled]:opacity-75 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300">
            <input wire:model="answers.{{ $question->id }}" value="agree" id="agree-{{ $question->id }}"  type="radio" class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-slate-300 bg-white before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-100 checked:border-purple-700 checked:bg-purple-700 checked:before:visible focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-purple-700 disabled:cursor-not-allowed dark:border-slate-700 dark:bg-slate-900 dark:before:bg-slate-100 dark:checked:border-purple-600 dark:checked:bg-purple-600 dark:focus:outline-slate-300 dark:checked:focus:outline-purple-600">
            <span class="text-sm">مهتم</span>
        </label>
        <label for="disagree-{{ $question->id }}" class="flex h-10 w-fits min-w-[8rem] cursor-pointer items-center justify-start gap-2 rounded-xl border border-slate-300 bg-slate-100 px-4 py-2 font-medium text-slate-700 has-[:disabled]:opacity-75 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300">
            <input  wire:model="answers.{{ $question->id }}" value="disagree" id="disagree-{{ $question->id }}" type="radio" class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-slate-300 bg-white before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-100 checked:border-purple-700 checked:bg-purple-700 checked:before:visible focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-purple-700 disabled:cursor-not-allowed dark:border-slate-700 dark:bg-slate-900 dark:before:bg-slate-100 dark:checked:border-purple-600 dark:checked:bg-purple-600 dark:focus:outline-slate-300 dark:checked:focus:outline-purple-600" >
            <span class="text-sm">غير مهتم</span>
        </label>
      
    </div>
</div>

