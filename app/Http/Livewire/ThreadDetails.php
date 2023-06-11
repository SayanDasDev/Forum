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

    public function markAsBest($commentId)
    { 
        $this->thread->comments()->update(['is_best' => false]);
        
        $comment = Comment::findOrFail($commentId);

        $comment->is_best = true;
        $comment->save();
        
        return redirect()->route('threads.details', $this->thread->id);
    }
}
