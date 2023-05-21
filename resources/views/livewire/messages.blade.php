<div class="position-relative">
    <div class="chat-messages p-4">
        @foreach ($messages as $item)
            <div class="chat-message-right pb-4">
                <div>
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1" alt="Chris Wood" width="40"
                        height="40">
                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                </div>
                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                    <div class="font-weight-bold mb-1">You</div>
                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                </div>
            </div>
        @endforeach

        {{-- <div class="chat-message-left pb-4">
            <div>
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                    class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                    height="40">
                <div class="text-muted small text-nowrap mt-2">2:34 am</div>
            </div>
            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
            </div>
        </div> --}}
        <div class="flex-grow-0 py-3 px-4 border-top">
            <div class="input-group">
                <input type="text" wire:model="body" class="form-control" placeholder="Type your message">
                <button class="btn btn-primary" wire:click="sendMessage()">Send</button>
            </div>
        </div>


    </div>
</div>