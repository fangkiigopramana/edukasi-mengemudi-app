<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto mt-3">
            <div class="grid grid-cols-3 sm:grid-rows-3 gap-4 mb-3">
                <div class="col-span-2">
                    <h1 class="text-5xl font-bold">Tonton dan Belajar!</h1>
                        <p class="py-6">
                            Jelajahi Tutorial Video Kami. Temukan berbagai tutorial untuk meningkatkan keterampilan
                            mengemudi Anda. Belajar dengan kecepatan Anda sendiri dengan panduan video kami yang
                            komprehensif.
                        </p>
                </div>
                <div>
                    <div class="rounded-lg shadow-2xl">
                        <iframe class="w-full rounded-[24px]" height="250"
                            src="https://www.youtube.com/embed/UnqOmbR2qNs" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <dl class="grid max-w-xl grid-cols-1 gap-x-4 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                @foreach (range(1, 10) as $item)
                    <div class="relative">
                        <iframe class="w-full rounded-[24px]" height="250"
                            src="https://www.youtube.com/embed/UnqOmbR2qNs" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
