<?php

namespace App\Livewire;

use App\Models\Question;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class Chat extends Component
{
    public $chats = [];

    public function mount()
    {
        // Initialize the chat with a default message.
        $this->chats[] = [
            'type' => 'start', // Start message type
            'message' => 'Hai! Ada yang bisa saya bantu?',
            'time' => Date::now()->format('H:i')
        ];
    }

    public function showChat($item)
    {
        $answer = Question::where('question', $item)->first();

        // Add the response to the chat.
        $this->chats[] = [
            'type' => 'end', // Start message type
            'message' => $item,
            'time' => Date::now()->format('H:i')
        ];

        if ($answer) {
            // Add user's choice to the chat.
            $this->chats[] = [
                'type' => 'start', // End message type
                'message' => $answer->answer,
                'time' => Date::now()->format('H:i')
            ];
        } else {
            // Handle case where no matching question is found.
            $this->chats[] = [
                'type' => 'end', // End message type
                'message' => 'Sorry, I could not find an answer to that question.'
            ];
        }

        
    }

    public function render()
    {
        return view('livewire.chat',[
            'questions' => Question::all()
        ]);
    }
}
