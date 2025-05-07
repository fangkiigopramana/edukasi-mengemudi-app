<div class="bg-white">
    <div class="container py-5">
        <div class="d-flex flex-column">
            <h3 class="mt-3 fw-bold text-dark text-decoration-underline">Poster Informasi Mengemudi</h3>
            <p class="mt-4 mb-4 text-muted">Di sini Anda dapat menemukan berbagai informasi dalam mengemudi yang penting dan menarik yang disajikan dalam bentuk visual.</p>
        </div>

        @if ($posters->isEmpty())
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 300px;">
                <img src="{{ asset("not-available.gif") }}" alt="No Content" width="200" height="200">
                <p class="mt-3 text-muted fst-italic">Konten tidak tersedia</p>
            </div>
        @else
            <div class="mt-4 row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @foreach ($posters as $poster)
                    <div class="col">
                        <a class="d-flex flex-column align-items-center bg-white rounded-5 shadow-sm text-decoration-none"
                            data-bs-toggle="modal" data-bs-target="#my_modal_{{ $loop->iteration }}">
                            <img class="img-fluid rounded-top" src="{{ asset("storage/" . $poster->image) }}"
                                alt="">
                            <div class="p-3">
                                <p class="mb-3 text-muted">
                                    {{ $poster->title }}</p>
                            </div>
                        </a>
                        <dialog id="my_modal_{{ $loop->iteration }}" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <img class="img-fluid rounded-top" src="{{ asset("storage/" . $poster->image) }}"
                                            alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
