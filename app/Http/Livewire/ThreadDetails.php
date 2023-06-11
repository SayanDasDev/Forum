<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\Comment;

class ThreadDetails extends Component
{
    public $thread, $threadId, $comment;

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
        $this->threadId = $thread->id;
        $this->comment = $thread->comments;
    }

    public function render()
    {
        $bestComment = Comment::where('thread_id', $this->threadId)
            ->where('is_best', true)
            ->first();

        return view('livewire.thread-details',[
            'bestComment' => $bestComment,
        ]);
    }

}
