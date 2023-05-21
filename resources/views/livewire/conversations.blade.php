
<ul class="list-group">
    conversation list   
    @foreach($conversations as $item)
        <li class="list-group-item" wire:click="selectConversation({{ $item->id }})">
            {{ $item->receiver_id }}{{ \App\Models\User::find($item->receiver_id)->name }} .
            @if ($item->Messages->count() != 0)
                {{ Str::limit($item->Messages->last()->message, 10, '...') }}
            @endif
            {{ $item->Messages->count() }}
        </li>
    @endforeach
</ul>