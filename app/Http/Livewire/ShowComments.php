<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;


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
        return view('livewire.show-comments');
    }
}
