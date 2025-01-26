<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">Tonton dan Belajar</h2>
            <p
            class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
            Jelajahi Tutorial Video Kami</p>
            <p class="mt-6 text-lg/8 text-gray-600">Temukan berbagai tutorial untuk meningkatkan keterampilan mengemudi Anda. Belajar dengan kecepatan Anda sendiri dengan panduan video kami yang komprehensif.</p>
        </div>
        <div class="mx-auto mt-16">
            <dl class="grid max-w-xl grid-cols-1 gap-x-4 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                @foreach (range(1, 10) as $item)
                <div class="relative">
                    <iframe class="w-full rounded-[24px]" height="250" src="https://www.youtube.com/embed/UnqOmbR2qNs"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>