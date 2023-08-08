<div class="col-12 col-lg-6 p-2">

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    {{-- PREVIEW MODAL --}}
    <div class="modal fade" id="preview{{ $event->id }}" tabindex="-1" role="dialog"
        aria-labelledby="preview{{ $event->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="preview{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column text-black">

                    <img src="{{ $event->image }}" alt="" class="col-12 col-lg-6 mx-auto d-block img-thumbnail">
                    <h4 class="modal-title" id="preview{{ $event->id }}">{{ $event->title }}</h4>

                    <label>{{ date('d F Y', strtotime($event->date)) }}</label>
                    <label>Status: <span
                            class="text-{{ $event->status->color }} fw-bold">{{ $event->status->name }}</span></label>

                    <div class="col-12 d-flex mt-3 flex-column flex-lg-row">

                        <a class="col-12 col-lg-4 px-2 mb-2 mb-lg-0"
                            href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                            <button class="btn btn-primary w-100">
                                <img src="/storage/page/icon/facebook.svg" alt="" width="25px" height="25px"
                                    class="me-1"><small>SHARE</small></button>
                        </a>
                        <div class="col-12 col-lg-4 px-2 mb-2 mb-lg-0">
                            <button class="btn btn-warning w-100" data-bs-target="#terms{{ $event->id }}"
                                data-bs-toggle="modal"><img src="/storage/page/icon/info.svg" alt=""
                                    width="25px" height="25px" class="me-1"><small>Syarat Dan
                                    Ketentuan</small></button>
                        </div>
                        <div class="col-12 col-lg-4 px-2">
                            <button class="btn btn-success w-100" data-bs-toggle="modal"
                                data-bs-target="#form{{ $event->id }}"><img src="/storage/page/icon/lotto.svg"
                                    alt="" width="25px" height="25px" class="me-1"><small>Ikut
                                    Lomba</small></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL SYARAT DAN KETENTUAN --}}
    <div class="modal fade" id="terms{{ $event->id }}" tabindex="-1" role="dialog"
        aria-labelledby="terms{{ $event->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="terms{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column text-black">
                    <pre class="text-center my-5 text-wrap" style="font-family: sans-serif;font-size: 1.125rem">
                        {{ $event->terms }}
                    </pre>

                </div>
                <div class="modal-footer">
                    <button type="button" type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#preview{{ $event->id }}">Kembali</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL FORM IKUT LOMBA --}}
    <div class="modal fade" id="form{{ $event->id }}" tabindex="-1" role="dialog" wire:ignore.self
        aria-labelledby="form{{ $event->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="form{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column text-black">
                    @if ($event->status_id == 1)
                        <h2 class="text-black">EVENT BELUM DIMULAI, SILAHKAN TUNGGU BEBERAPA SAAT LAGI</h2>
                        <a class="col-12 col-lg-4 px-2 mb-2 mb-lg-0 mx-auto"
                            href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                            <button class="btn btn-primary w-100">
                                <img src="/storage/page/icon/facebook.svg" alt="" width="25px"
                                    height="25px" class="me-1"><small>CEK FACEBOOK</small></button>
                        </a>
                    @elseif ($event->status_id == 2)
                        @auth
                            @if ($participated)
                                <h2 class="text-black">TERIMA KASIH TELAH MENGIKUTI LOMBA, SILAHKAN TUNGGU SAMPAI PEMENANG
                                    LOMBA DITENTUKAN.
                                </h2>
                            @else
                                <h2 class="text-black">FORM PARTISIPASI LOMBA</h2>
                                <form wire:submit.prevent='submit' class="col-12 mx-auto col-lg-9 text-start">
                                    <label class="fw-bold">NAMA SITUS</label>
                                    <select wire:model="site_id" id="site_id" class="form-select">
                                        @foreach ($sites as $site)
                                            <option value="{{ $site->id }}">{{ $site->name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="mt-2 text-start">
                                        <label for="answer" class="fw-bold">JAWABAN</label>
                                        <input type="text" class="form-control" id="answer"
                                            placeholder="Masukkan Jawaban Sesuai Dengan Format Yang Berlaku"
                                            wire:model.lazy="answer">
                                    </div>

                                    @if ($event->need_upload)
                                        <div class="mt-2 text-start">
                                            <label for="photo" class="fw-bold">BUKTI SHARE</label>
                                            <input type="file" class="form-control" id="photo" wire:model="photo"
                                                accept=".jpg,.jpeg,.png" required>
                                        </div>
                                    @endif
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary col-9 col-lg-4">KIRIM</button>
                                    </div>
                                </form>
                            @endif
                        @endauth
                        @guest
                            <h2 class="text-black">
                                Silahkan Login Dahulu Jika Ingin Berpartisipasi, Terima Kasih.

                            </h2>
                            <div class="d-flex gap-3 mx-auto flex-column flex-lg-row">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <button class="btn text-white register-button">MASUK</button>
                                </a>
                                <a href="{{ route('register') }}" class="nav-link">
                                    <button class="btn text-white register-button">DAFTAR</button>
                                </a>
                            </div>
                        @endguest
                    @elseif ($event->status_id == 3)
                        <h2 class="text-black">HARAP TUNGGU SAMPAI HASIL LOMBA KELUAR, TERIMA KASIH</h2>
                        <a class="col-12 col-lg-4 px-2 mb-2 mb-lg-0 mx-auto"
                            href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                            <button class="btn btn-primary w-100">
                                <img src="/storage/page/icon/facebook.svg" alt="" width="25px"
                                    height="25px" class="me-1"><small>CEK FACEBOOK</small></button>
                        </a>
                    @elseif ($event->status_id == 4)
                        <h2 class="text-black">LOMBA SUDAH DITUTUP</h2>
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                            data-bs-target="#winnerList{{ $event->id }}">
                            Daftar Pemenang
                        </button>
                    @endif


                </div>
                <div class="modal-footer">
                    <button type="button" type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#preview{{ $event->id }}">Kembali</button>



                </div>
            </div>
        </div>
    </div>

    {{-- FORM LIST PEMENANG --}}

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="winnerList{{ $event->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="winnerList" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="winnerList">Daftar Pemenang Lomba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-numbered text-black">
                        @foreach ($event->commentWinners->where('winner_list_id', '<', 4) as $item)
                            @if ($loop->first)
                                <li class="mt-3">USER YANG MENANG:</li>
                            @endif
                            <li class="list-group-item">
                                {{ $item->winnerList->name . '-' . $item->user->name . '-' . $item->eventComment->answer }}
                            </li>
                        @endforeach
                        @foreach ($event->commentWinners->where('winner_list_id', 5) as $failures)
                            @if ($loop->first)
                                <li class="mt-3">USER YANG GUGUR:</li>
                            @endif

                            <li class="list-group-item">
                                {{ $failures->winnerList->name . '-' . $failures->user->name . '-' . $failures->failed_reason }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('winnerList{{ $event->id }}'), options)
    </script>

    <style>
        .event-title {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>


    <div class="col-12 p-5" style="border: 6px ridge goldenrod">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex flex-column">
                <img src="{{ $event->image }}" class="col-6 col-lg-6 mx-auto" width="260px" height="260px">
                <h4 class="text-white mt-3 event-title">{{ $event->title }}</h4>
                <label>{{ date('d F Y', strtotime($event->date)) }}</label>
                <label>Status: <span
                        class="text-{{ $event->status->color }} fw-bold">{{ $event->status->name }}</span></label>

                <button type="button" class="col-12 btn btn-info fw-bold fs-5 align-middle mt-3"
                    data-bs-toggle="modal" data-bs-target="#preview{{ $event->id }}">
                    <img src="/storage/page/icon/preview.svg" alt="" width="25px" height="25px"
                        class="me-1 mb-1">Lihat
                </button>
            </div>
        </div>
    </div>
</div>
