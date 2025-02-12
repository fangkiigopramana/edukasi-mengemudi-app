<div class="bg-white">
    <div class="container py-5">
        <div class="d-flex flex-column">
            <h1 class="mt-3 display-4 fw-bold text-dark">Infografis Lists</h1>
            <p class="mt-4 mb-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Corporis eos, veniam temporibus amet ipsum, rem itaque mollitia dolorum iure magnam ea recusandae
                similique explicabo, natus modi numquam! Expedita facilis reiciendis aliquam voluptatem dolorum iure nam
                temporibus distinctio nulla quas sequi quia suscipit mollitia eaque molestiae dolor, atque consectetur
                quam. Ullam!</p>
        </div>

        <div class="mt-4 row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
            @foreach (range(1, 20) as $id)
                <div class="col">
                    <a class="d-flex flex-column align-items-center bg-white rounded-5 shadow-sm text-decoration-none" data-bs-toggle="modal" data-bs-target="#my_modal_{{ $id }}">
                        <img class="img-fluid rounded-top" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                        <div class="p-3">
                            <p class="mb-3 text-muted">
                                Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                    <dialog id="my_modal_{{ $id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <img class="img-fluid rounded-top" src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </dialog>
                </div>
            @endforeach
        </div>
    </div>
</div>
