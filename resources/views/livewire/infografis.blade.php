<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex flex-col">
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">Infografis Lists</h1>
            <p class="mt-4 mb-4 text-base/7 text-slate-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eos, veniam temporibus amet ipsum, rem itaque mollitia dolorum iure magnam ea recusandae similique explicabo, natus modi numquam! Expedita facilis reiciendis aliquam voluptatem dolorum iure nam temporibus distinctio nulla quas sequi quia suscipit mollitia eaque molestiae dolor, atque consectetur quam. Ullam!</p>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach (range(1, 20) as $infographic)
                <div class="group relative">
                    <img src="https://www.bps.go.id/_next/image?url=https%3A%2F%2Fweb-api.bps.go.id%2Fcover.php%3Ff%3DCoxMQEQWpVWSFrHCevLRj2dKeXhtTStXdXVOcktORGQ0aUo2eUQ0K3NpQ2R5WVcyVmpSTS9MS1UzdkozdTdnVGgvVUJPa2RXL0xva3ViSXBqUWtqMVo3NWx2bXRMV2Jadi9ETXVnZ1BuSU9YbXZ5blhJcmRUM3pSa29xNzBJRStvNXhsWksxOE5hUWFhNTZS&w=3840&q=75"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-full">
                </div>
            @endforeach


            <!-- More products... -->
        </div>
    </div>
</div>
