<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Question;
use App\Models\Pattern;
use App\Models\FunctionalArea;

class Quiz extends Component
{
    public $questions;
    public $currentPage = 1;
    public $totalPages;
    public $answers = [];
    public $showResults = false;
    public $resultPattern;
    public $resultFunctionalAreas = [];

    public function mount()
    {
        $this->questions = Question::all();
        $this->totalPages = ceil($this->questions->count() / 10);
    }

    public function nextPage()
    {
        if ($this->currentPage < $this->totalPages) {
            $this->currentPage++;
        } else {
            $this->calculateResults();
        }
    }

    public function previousPage()
    {
        if ($this->currentPage > 1) {
            $this->currentPage--;
        }
    }

    public function calculateResults()
    {
        $patternCounts = [];
        foreach ($this->answers as $questionId => $answer) {
            if ($answer == 'agree') {
                $question = Question::find($questionId);
                if (!isset($patternCounts[$question->pattern_id])) {
                    $patternCounts[$question->pattern_id] = 0;
                }
                $patternCounts[$question->pattern_id]++;
            }
        }

        $maxCount = max($patternCounts);
        $patterns = array_keys($patternCounts, $maxCount);

        if (count($patterns) > 1) {
            // إذا كان هناك أكثر من نمط بنفس العدد من الإعجابات، إعادة الاختبار
            $this->resetQuiz();
        } else {
            // عرض النتائج
            $this->resultPattern = Pattern::find($patterns[0]);
            $this->resultFunctionalAreas = FunctionalArea::all();
            $this->showResults = true;
        }
    }

    public function resetQuiz()
    {
        $this->currentPage = 1;
        $this->answers = [];
        $this->showResults = false;
        $this->resultPattern = null;
        $this->resultFunctionalAreas = [];
    }

    public function render()
    {
        $questionsToShow = $this->questions->forPage($this->currentPage, 10);
        return view('livewire.quiz', [
            'questionsToShow' => $questionsToShow,
        ]);
    }
}