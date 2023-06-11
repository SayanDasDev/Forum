<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

use Illuminate\Support\Facades\Auth;

class Threads extends Component
{
    public $th, $thread_id, $thread_title, $thread_subtitle, $thread_content;
    public $threadShowing=true;
    public $threadCreating=false;
    public $threadEditing=false;
    
    public function render()
    {
        $userId = Auth::id();
        $this->th = Thread::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.threads');
    }

    private function resetInputFields(){
        $this->thread_title = '';
        $this->thread_subtitle = '';
        $this->thread_content = '';
    }

    public function enterNewThreadMode()
    {
        $this->threadShowing=false;
        $this->threadCreating=true;
        $this->threadEditing=false;
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

    public function edit($id)
    {
        $thread = Thread::findOrFail($id);
        $this->thread_id = $id;
        $this->thread_title = $thread->thread_title;
        $this->thread_subtitle = $thread->thread_subtitle;
        $this->thread_content = $thread->thread_content;

        $this->threadShowing=false;
        $this->threadCreating=false;
        $this->threadEditing=true;
    }

    public function update()
    {
        $userId = Auth::id();
        $this->validate([
            'thread_title' => 'required|max:255',
            'thread_subtitle' => 'nullable|max:255',
            'thread_content' => 'required',
        ]);

        $thread = Thread::find($this->thread_id);
        $thread->update([
            'thread_title' => $this->thread_title,
            'thread_subtitle' => $this->thread_subtitle,
            'thread_content' => $this->thread_content,
            'user_id' => $userId,
        ]);

        $this->threadShowing=true;
        $this->threadCreating=false;
        $this->threadEditing=false;

        $this->resetInputFields();
    }

    public function discard()
    {
        $this->resetInputFields();

        $this->threadShowing=true;
        $this->threadCreating=false;
        $this->threadEditing=false;
    }
}