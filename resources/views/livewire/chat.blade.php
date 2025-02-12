<div class="d-flex flex-column align-items-center min-vh-100 bg-white w-100 h-100">
    <div class="d-flex flex-column gap-4 w-100 p-4 bg-white rounded-lg py-5">
        @foreach($chats as $chat)
        @if($chat['type'] === 'start')
        <div class="d-flex align-items-start gap-2">
            <span class="w-8 h-8 rounded-circle bg-dark" alt="Jese image"></span>
            <div class="d-flex flex-column p-4  rounded">
                <div class="d-flex align-items-center">
                    <span class="text-sm fw-semibold text-dark">Chatbot</span>
                    <span class="text-sm fw-normal text-muted ms-2">{{$chat['time']}}</span>
                </div>
                <p class="text-sm fw-normal py-2 text-dark">{{ $chat['message'] }}</p>
            </div>
        </div>
        @else
        <div class="d-flex align-items-end gap-2 justify-content-end">
            <div class="d-flex flex-column p-4 rounded">
                <div class="d-flex align-items-center">
                    <span class="text-sm fw-semibold text-dark">User</span>
                    <span class="text-sm fw-normal text-muted ms-2">{{$chat['time']}}</span>
                </div>
                <p class="text-sm fw-normal py-2 text-dark">{{ $chat['message'] }}</p>
            </div>
            <span class="w-8 h-8 rounded-circle bg-purple" alt="Jese image"></span>
        </div>
        @endif
        @endforeach
    </div>
    <div class="w-100 p-4 d-flex justify-content-center fixed-bottom bg-white">
        <select class="form-select w-100 max-w-xl" wire:change="showChat($event.target.value)">
            <option disabled selected>Pilih Pertanyaan</option>
            @foreach ($questions as $question)
            <option value="{{$question->question}}">{{Str::title($question->question)}}</option>
            @endforeach
        </select>
    </div>
</div>
