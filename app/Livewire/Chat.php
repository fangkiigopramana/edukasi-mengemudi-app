<?php

namespace App\Livewire;

use Livewire\Component;

class Chat extends Component
{
    public $chats = [];

    public function mount()
    {
        // Initialize the chat with a default message.
        $this->chats[] = [
            'type' => 'start', // Start message type
            'message' => 'Hello! What can I help you with?'
        ];
    }

    public function showChat($item, $response)
    {
        // Add user's choice to the chat.
        $this->chats[] = [
            'type' => 'end', // End message type
            'message' => $item
        ];

        // Add the response to the chat.
        $this->chats[] = [
            'type' => 'start', // Start message type
            'message' => $response
        ];
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
