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
            <div class="row justify-content-center">
                @if($videos->isEmpty())
                    <div class="col-12 text-center">
                        <p class="text-muted">Tidak ada video yang tersedia saat ini. Silakan periksa kembali nanti.</p>
                    </div>
                @else
                    @foreach ($videos as $video)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item rounded rounded-3" height="400" width="300"
                                    src="{{$video->url}}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
