<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;

class Threads extends Component
{
    public $th;
    public function render()
    {
        $userId = Auth::id();
        $this->th = Thread::where('user_id', $userId)->get();
        return view('livewire.threads');
    }
}
