<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;


class StoreTasks extends Component
{
    public $title;
    public $description;
    public $status;
    public $task;

    // to be used when auth started
    // public $user_id = '';


    public function render()
    {
        return view('livewire.store-tasks');
    }

    public function savedata()
    {
        $task = new task;
        $task->title = $this->title;
        $task->description = $this->description;
        $task->status = $this->status;
        if(auth()->user()){
            
            $task->user_id = auth()->user()->id;
            $task->save();
            $this->resetdata();
        }
        else
        {
           return redirect('/login');
        }
    }
    public function resetdata()
    {
        $this->reset(['title', 'description', 'status']);
    }

    public function mount()
    {
        $this->task = task::all();
    }
}
