<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex flex-col">
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">Infografis Lists</h1>
            <p class="mt-4 mb-4 text-base/7 text-slate-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Corporis eos, veniam temporibus amet ipsum, rem itaque mollitia dolorum iure magnam ea recusandae
                similique explicabo, natus modi numquam! Expedita facilis reiciendis aliquam voluptatem dolorum iure nam
                temporibus distinctio nulla quas sequi quia suscipit mollitia eaque molestiae dolor, atque consectetur
                quam. Ullam!</p>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach (range(1, 20) as $id)
                <a onclick="my_modal_{{ $id }}.showModal()"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-48 md:h-56 lg:h-64 xl:h-72"
                        src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <dialog id="my_modal_{{ $id }}" class="modal">
                    <div class="modal-box p-0">
                        <img class="object-cover rounded-t-lg w-full"
                            src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                      </form>
                </dialog>
            @endforeach

        </div>
    </div>
</div>
