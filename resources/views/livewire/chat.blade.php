<div class="flex flex-col items-center min-h-screen bg-white dark:bg-gray-800 w-full h-full">
    <div class="flex flex-col gap-4 w-full p-4 dark:bg-gray-700 rounded-lg shadow-md py-24">
        @foreach($chats as $chat)
        @if($chat['type'] === 'start')
        <div class="flex items-start gap-2.5">
            <span class="w-8 h-8 rounded-full bg-gray-800" alt="Jese image"></span>
            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Chatbot</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{$chat['time']}}</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{ $chat['message'] }}</p>
            </div>
        </div>
        @else
        <div class="flex items-end gap-2.5 justify-end">
            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <span class="text-sm font-semibold text-gray-900 dark:text-white">User</span>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{$chat['time']}}</span>
            </div>
            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{ $chat['message'] }}</p>
            </div>
            <span class="w-8 h-8 rounded-full bg-purple-800" alt="Jese image"></span>
        </div>
        @endif
        @endforeach
    </div>
    <div class="w-full p-4 flex justify-center fixed bottom-0 bg-white dark:bg-gray-800 shadow-lg">
        <select class="select w-full max-w-xl" wire:change="showChat($event.target.value)">
            <option disabled selected>Pilih Pertanyaan</option>
            @foreach ($questions as $question)
            <option value="{{$question->question}}">{{Str::title($question->question)}}</option>
            @endforeach}
        </select>
    </div>
</div>
