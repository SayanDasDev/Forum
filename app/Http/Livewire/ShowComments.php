<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\Comment;


class ShowComments extends Component
{

    public $thread;

    protected $listeners = ['commentAdded' => '$refresh'];

    public function mount(Thread $threadId)
    {
        $this->thread = $threadId;
    }

    public function render()
    {
        $comments = $this->thread->comments()
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.show-comments', compact('comments'));
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
