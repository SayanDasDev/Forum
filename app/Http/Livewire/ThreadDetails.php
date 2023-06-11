<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\Comment;

class ThreadDetails extends Component
{
    public $thread, $threadId;

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
        $this->threadId = $thread->id;
    }

    public function render()
    {
        return view('livewire.thread-details');
    }

}
