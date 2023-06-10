<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

use Illuminate\Support\Facades\Auth;

class Threads extends Component
{
    public $th, $thread_title, $thread_subtitle, $thread_content;
    public $threadShowing=true;
    public function render()
    {
        $userId = Auth::id();
        $this->th = Thread::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.threads');
    }

    public function enterNewThreadMode()
    {
        $this->threadShowing=false;
    }

    public function store()
    {
        $userId = Auth::id();
        $this->validate([
            'thread_title' => 'required|max:255',
            'thread_subtitle' => 'nullable|max:255',
            'thread_content' => 'required',
        ]);

        Thread::create([
            'thread_title' => $this->thread_title,
            'thread_subtitle' => $this->thread_subtitle,
            'thread_content' => $this->thread_content,
            'user_id' => $userId,
        ]);

        return redirect('/threads');
    }
}
