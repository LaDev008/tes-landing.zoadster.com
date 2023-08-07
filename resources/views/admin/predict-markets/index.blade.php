@extends('layouts.adminlayout')
@section('content')
    <div class="d-flex justify-content-center flex-column text-center text-white">
        @if (session()->has('message'))
            <x-flash />
        @endif

        <label class="fs-1 fw-semibold">PASARAN PREDIKSI</label>

        <table class="table-bordered table-light table-hover table align-middle">
            <thead class="table-dark">
                <tr>
                    <td>No.</td>
                    <td>NAMA PASARAN</td>
                    <td>Jam Tutup</td>
                    <td>Jam Buka</td>
                    <td colspan="2">ACTION</td>
                </tr>
            </thead>
            <tbody class="fw-semibold">
                @foreach ($predicts as $predict)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $predict->name }}</td>
                        <td>{{ $predict->close }}</td>
                        <td>{{ $predict->open }}</td>
                        <td><a href="{{ route('predicts.edit', $predict->id) }}"><button class="btn btn-outline-warning"
                                    type="button">EDIT</button></a>
                        </td>
                        <td>
                            <form action="{{ route('predicts.destroy', $predict->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" onclick="return confirm('Yakin Hapus ?')"
                                    type="submit">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
