<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Request;

class ChatComponent extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($id)
    {
        $this->user = User::where('id', $id)->first();
    }
}
