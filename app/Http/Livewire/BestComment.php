<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class BestComment extends Component
{
    public $commentId, $comment;

    protected $listeners = ['bestCommentMarked' => '$refresh'];
    
    public function mount($commentId)
    {
        $this->commentId = $commentId;
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
