<?php

namespace App\Http\Livewire;

use App\Models\Messages as ModelsMessages;
use Livewire\Component;

class Messages extends Component
{
    public function render()
    {
        $messages = ModelsMessages::where('conversation_id', $this->selectedConversationId)->get(); 

        return view('livewire.messages',[
            "messages" => $messages
        ]);
    }
    public $selectedConversationId, $body;

    protected $listeners = [
        'conversationSelected' => 'showMessages',
    ];

    public function showMessages($conversationId)
    {
        $this->selectedConversationId = $conversationId;
    }

    public function sendMessage()
    {
        // $this->validate();
        ModelsMessages::create([
            'conversation_id' => $this->selectedConversationId,
            'sender_id' => auth()->id(),
            'receiver_id' => 2,
            'message' => $this->body,
        ]);
        $this->body = "";
    }

}
