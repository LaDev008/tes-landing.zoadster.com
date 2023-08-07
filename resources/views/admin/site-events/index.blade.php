@extends('layouts.adminlayout')
@section('title', 'EVENT LIST')
@section('content')
    <div class="col-12">
        @if (session()->has('message'))
            <livewire:components.flash />
        @endif

        <div class="position-relative text-center">
            <h1>DAFTAR LOMBA TOGEL NANAGROUP</h1>
            <a href="{{ route('events.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <table class="table table-bordered table-hover table-dark align-middle table-striped text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th colspan="4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ url($event->image) }}" target="_blank"><img src="{{ $event->image }}" width="50px"
                                    height="50px"></a></td>
                        <td>{{ $event->title }}</td>
                        <td>{{ date('d F Y', strtotime($event->date)) }}</td>
                        <td>{{ $event->status->name }}</td>
                        <td><a href="{{ route('events.edit', $event->id) }}"><button
                                    class="btn btn-warning">EDIT</button></a>
                        </td>
                        <td>
                            <form action="{{ route('events.destroy', $event->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin Ingin Hapus ?')">HAPUS</button>
                            </form>

                        </td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}">
                                <button type="button" class="btn btn-success">KOMENTAR</button>
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#winner{{ $event->id }}">
                                LIST PEMENANG
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="winner{{ $event->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="winner-list" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="winner-list">DAFTAR PEMENANG LOMBA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-numbered">
                                        @foreach ($comment_winners->where('site_event_id', $event->id) as $item)
                                            @if ($loop->first)
                                                <li class="mt-3">USER YANG MENANG:</li>
                                            @endif
                                            <li class="list-group-item">
                                                {{ $item->winnerList->name . '-' . $item->user->name . '-' . $item->eventComment->answer }}
                                            </li>
                                        @endforeach

                                        @foreach ($comment_failures->where('site_event_id', $event->id) as $failures)
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                                    <a href="{{ route('events.show', $event->id) }}">
                                        <button type="button" class="btn btn-primary">EDIT</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        const myModal = new bootstrap.Modal(document.getElementById('winner{{ $event->id }}'), options)
                    </script>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
