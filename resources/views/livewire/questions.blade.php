<div>
   <div class="grid gap-4 grid-cols-1 md:grid-cols-3 p-4">
   
    @foreach ($questions as $question )
        <x-question-card :question="$question"  />
    @endforeach

   </div>
</div>
