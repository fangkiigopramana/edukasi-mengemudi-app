<div class="flex flex-col items-center min-h-screen bg-white dark:bg-gray-800 w-full h-full">
    <div class="flex flex-col gap-4 w-full p-4 dark:bg-gray-700 rounded-lg shadow-md py-24">
        @foreach($chats as $chat)
        @if($chat['type'] === 'start')
        <div class="flex items-start gap-2.5">
            <span class="w-8 h-8 rounded-full bg-gray-800" alt="Jese image"></span>
            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Chatbot</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{ $chat['message'] }}</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
        </div>
        @else
        <div class="flex items-end gap-2.5 justify-end">
            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <span class="text-sm font-semibold text-gray-900 dark:text-white">User</span>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
            </div>
            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{ $chat['message'] }}</p>
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <span class="w-8 h-8 rounded-full bg-purple-800" alt="Jese image"></span>
        </div>
        @endif
        @endforeach
    </div>
    <div class="w-full p-4 flex justify-center">
        <select class="select w-full max-w-xl " wire:change="showChat($event.target.value.split('|')[0], $event.target.value.split('|')[1])">
            <option disabled selected>Pilih Pertanyaan</option>
            <option value="Item 1|Show Chat 1">Item 1</option>
            <option value="Item 2|Show Chat 2">Item 2</option>
            <option value="Item 3|Show Chat 3">Item 3</option>
        </select>
    </div>
</div>
