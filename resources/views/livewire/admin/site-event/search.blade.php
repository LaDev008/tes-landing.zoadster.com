<div class="col-12">
    <div class="col-12 text-center">
        <h1>DAFTAR KOMENTAR LOMBA TOGEL</h1>
        <div class="my-3 col-3 ms-auto me-5 ">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Cari Nomor" wire:model="search">
                <button class="btn btn-success" type="button">SEARCH</button>
            </div>
        </div>
        <table class="table table-hover table-striped table-dark table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>BUKTI SHARE</th>
                    <th>Nama User</th>
                    <th>Komentar</th>
                    <th>Waktu Komentar</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        @if ($comment->image)
                            <td><a href="{{ $comment->image }}" target="_blank"><img src="{{ $comment->image }}"
                                        width="50px" height="50px"></a></td>
                        @else
                            <td><label></label></td>
                        @endif
                        <td>{{ $comment->user->name }}</td>
                        <td>{{ $comment->answer }}</td>
                        <td>{{ date('d-m-Y H:i:s', strtotime($comment->updated_at)) }}</td>
                        <td>
                            @if ($comment->commentWinners)
                                @if ($comment->commentWinners->firstWhere('user_id', $comment->user_id) != null)
                                    {{ $comment->commentWinners->firstWhere('user_id', $comment->user_id)->winnerList->name }}
                                @endif
                            @endif
                        </td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#winner{{ $comment->id }}">
                                TENTUKAN PEMENANG
                            </button></td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#failed{{ $comment->id }}">
                                GUGURKAN PESERTA
                            </button></td>
                    </tr>

                    <div class="modal fade" id="winner{{ $comment->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="winner{{ $comment->id }}" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="winner{{ $comment->id }}">TENTUKAN PERINGKAT JUARA
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <livewire:admin.components.choose-winner :comment="$comment" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="failed{{ $comment->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="failed{{ $comment->id }}" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="failed{{ $comment->id }}">GUGURKAN MEMBER</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <livewire:admin.components.choose-failed :comment="$comment" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
</div>
