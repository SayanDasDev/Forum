<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class Threads extends Component
{
    public $th;
    public function render()
    {
        $this->th = Thread::all();
        return view('livewire.threads');
    }
}
