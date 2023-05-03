<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public $idea;
    public $votesCount;
    public $statuses;

    public function mount(Idea $idea, $votesCount, $statuses)
    {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->statuses = $statuses;
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
