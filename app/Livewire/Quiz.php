<?php
namespace App\Livewire;

use App\Models\Job;
use App\Models\Pattern;
use Livewire\Component;
use App\Models\Question;
use App\Models\FunctionalArea;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Quiz extends Component
{
    use LivewireAlert;
    public $questions;
    public $currentPage = 1;
    public $totalPages;
    public $answers = [];
    public $showResults = false;
    public $resultPattern;
    public $resultFunctionalAreas = [];
    public $questionsToShow;

    public function mount()
    {
        $this->questions = Question::all();
        $this->totalPages = ceil($this->questions->count() / 10);

        // $this->resultPattern = Pattern::find(1);
        // $this->resultFunctionalAreas = $this->resultPattern->functionalAreas()->with('jobs')->get();
        // $this->showResults = true;
    }

    public function updatedCurrentPage()
    {
        $this->questionsToShow = $this->questions->forPage($this->currentPage, 10);
    }

    public function nextPage()
    {
        if ($this->allQuestionsAnswered()) {
            if ($this->currentPage < $this->totalPages) {
                $this->currentPage++;
            } else {
                $this->calculateResults();
            }
        } else {
            $this->alert('error', 'يرجى الإجابة على جميع الأسئلة قبل الانتقال إلى الصفحة التالية.', [
                'position' => 'top-end',
                'timer' => 6000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
            // session()->flash('error', 'يرجى الإجابة على جميع الأسئلة قبل الانتقال إلى الصفحة التالية.');
        }
    }

    public function previousPage()
    {
        if ($this->currentPage > 1) {
            $this->currentPage--;
        }
    }

    public function allQuestionsAnswered()
    {
        $questionsOnCurrentPage = $this->questions->forPage($this->currentPage, 10);
        foreach ($questionsOnCurrentPage as $question) {
            if (!isset($this->answers[$question->id])) {
                return false;
            }
        }
        return true;
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
            $this->alert('error', 'حصل خطا ! يرجى اعادة الاختبار', [
                'position' => 'top-end',
                'timer' => 6000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } else {
            // عرض النتائج
            $this->resultPattern = Pattern::find($patterns[0]);
            $this->resultFunctionalAreas = $this->resultPattern->functionalAreas()->with('jobs')->get();
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
        $this->questionsToShow = $this->questions->forPage($this->currentPage, 10);
        return view('livewire.quiz', [
            'questionsToShow' => $this->questionsToShow,
        ]);
    }
}
