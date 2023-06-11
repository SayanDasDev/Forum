<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class Comments extends Component
{
    public $threadId, $comment;

    public function mount($threadId)
    {
        $this->threadId = $threadId;
    }

    protected $rules = [
        'comment' => 'required',
    ];

    public function render()
    {
        return view('livewire.comments');
    }

    public function addComment()
    {
        $this->validate();

        $userId = Auth::id();

        Comment::create([
            'thread_id' => $this->threadId,
            'user_id' => $userId,
            'content' => $this->comment,
        ]);

        $this->comment = '';

    }

}
