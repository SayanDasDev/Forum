<?php

namespace App\Http\Livewire;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class AddComments extends Component
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
        return view('livewire.add-comments');
    }

    public function addComment()
    {
        try {
            
            $this->validate();

            $userId = Auth::id();

            Comment::create([
                'thread_id' => $this->threadId,
                'user_id' => $userId,
                'content' => $this->comment,
            ]);

            $this->comment = '';

            session()->flash('message', 'Comment added successfully.');
            $this->emit('commentAdded');

        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create expense. '.$e->getMessage());
        }
        
    }
}
