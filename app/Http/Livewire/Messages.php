<?php

namespace App\Http\Livewire;

use App\Models\Messages as ModelsMessages;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Messages extends Component
{
    public function render()
    {
        $messages = ModelsMessages::where('conversation_id', 1)->get();

        return view('livewire.messages', [
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
            'conversation_id' => 1,
            'sender_id' => auth()->id(),
            'receiver_id' => 3,
            'message' => "hii",
        ]);
    }
    protected $rules = [
        'body' => 'required|min:1'
    ];
}
