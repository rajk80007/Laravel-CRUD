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
    public $s_id;

    public $update=false;

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
            $this->mount();
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

    public function deletetask($id)
    {
        $data = task::find($id);
        $data->delete();

        $this->mount();
    }

    public function updatetask($id)
    {
        $task = task::find($id);

        $this->s_id=$task->id;

        $this->name = $task->title;

        $this->description = $task->description;

        $this->status = $task->status;

        $this->update=true;

    }

    public function updatesave()
    {
        $data = task::find($this->s_id);
        $data->title = $this->title;
        $data->description = $this->description;
        $data->status = $this->status;
        $data->save();
        $this->resetdata();
        $this->mount();
        $this->update=false;
    }
}
