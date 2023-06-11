<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class ThreadDetails extends Component
{
    public $thread;

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        return view('livewire.thread-details');
    }
}
