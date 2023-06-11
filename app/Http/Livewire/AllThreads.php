<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class AllThreads extends Component
{
    public function render()
    {
        $threads = Thread::orderBy('created_at', 'desc')->get();
        return view('livewire.all-threads', compact('threads'));
    }
}
