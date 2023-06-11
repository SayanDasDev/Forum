<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Thread;

class BestComment extends Component
{
    public $commentId, $comment, $thread;
    // public $a;

    protected $listeners = ['bestCommentMarked' => '$refresh'];
    
    public function mount($commentId, Thread $threadId)
    {
        $this->commentId = $commentId;
        $this->thread = $threadId;
        $this->comment = Comment::find($commentId);
    }

    public function render()
    {
        return view('livewire.best-comment');
    }

    public function unmarkBest()
    {
        $this->comment->update(['is_best' => false]);
        $this->emitUp('unmarkedBestComment');
    }
}
