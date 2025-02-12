<div class="bg-white py-5">
    <div class="container">
        <div class="mt-3">
            <div class="row mb-3">
                <div class="col-12">
                    <h1 class="display-4 font-weight-bold">Tonton dan Belajar!</h1>
                    <p class="py-3">
                        Jelajahi Tutorial Video Kami. Temukan berbagai tutorial untuk meningkatkan keterampilan
                        mengemudi Anda. Belajar dengan kecepatan Anda sendiri dengan panduan video kami yang
                        komprehensif.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach (range(1, 10) as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item rounded rounded-3" height="250"
                                src="https://www.youtube.com/embed/UnqOmbR2qNs" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
