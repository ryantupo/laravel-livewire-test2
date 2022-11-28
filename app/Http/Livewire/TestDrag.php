<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TestDrag extends Component
{

    public $tasks;


    public function render()
    {
        $this->tasks = Task::all();
        return view('livewire.test-drag');
    }
}

