<?php

namespace App\Livewire;

use App\Events\MessageSendEvent;
use App\Models\Message;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Request;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $receiver_id;
    public $message = '';
    public $messages = [];
    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($user_id)
    {
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $user_id;

        $messages = Message::where(function ($query) {
            $query->where('sender_id', $this->sender_id)
                ->where('receiver_id', $this->receiver_id);
        })
            ->orWhere(function ($query) {
                $query->where('sender_id', $this->receiver_id)
                    ->where('receiver_id', $this->sender_id);
            })
            ->with(['sender:id,name', 'receiver:id,name'])
            ->get();

        $this->messages = $messages;

        // foreach ($messages as $messages) {
        //     $this->appendChatMessage($messages);
        // }

        // dd($this->messages);

        $this->user = User::where('id', $user_id)->first();
    }

    public function sendMessage()
    {
        $chatMessage = new Message();
        $chatMessage->sender_id = $this->sender_id;
        $chatMessage->receiver_id = $this->receiver_id;
        $chatMessage->message = $this->message;
        $chatMessage->save();

        $this->appendChatMessage($chatMessage);
        // event(new MessageSendEvent($chatMessage));

        broadcast(new MessageSendEvent($chatMessage))->toOthers();

        $this->message = '';
    }

    #[On('echo-private:chat-channel.{sender_id},MessageSendEvent')]
    public function listenForMessage($event){
        $chatMessage = Message::whereId($event['message']['id'])
            ->with('sender:id,name', 'receiver:id,name')
            ->first();

         $this->appendChatMessage($chatMessage);
    }

    

            // $chatMessage = Message::where('id', $event['message']['id'])
        //     ->with(['sender:id,name', 'receiver:id,name'])
        //     ->first();
        //     // $this->appendChatMessage($chatMessage);

        //     dd($this->$event);

    public function appendChatMessage($message)
    {
        $this->messages = [
            'id' => $message->id,
            'message' => $message->message,
            'sender' => $message->sender->name,
            'receiver' => $message->receiver->name,
        ];
    }
}

    // public function mount($id)
    // {
    //     $this->sender_id = auth()->user()->id;
    //     $this->receiver_id = $id;

    //     $messages = Message::where(function ($query) {
    //         $query->where('sender_id', $this->sender_id)
    //             ->where('receiver_id', $this->receiver_id);
    //     })
    //         ->orWhere(function ($query) {
    //             $query->where('sender_id', $this->receiver_id)
    //                 ->where('receiver_id', $this->sender_id);
    //         })
    //         ->with(['sender:id,name', 'receiver:id,name'])
    //         ->get();

    //     foreach ($messages as $message) {
    //         $this->appendChatMessage($message);
    //     }

    //     // dd($this->messages);

    //     $this->user = User::where('id', $id)->first();
    // }
