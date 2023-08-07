@extends('layouts.adminlayout')
@section('title', 'Site List')
@section('content')
    <div class="col-12">
        @if (session()->has('message'))
            <livewire:components.flash status="{{ session('status') }}" message="{{ session('message') }}" />
        @endif
        <div class="position-relative text-center">
            <h1>DAFTAR NAMA SITUS</h1>
            <a href="{{ route('sites.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <div class="col-12 mt-4 px-4">
            <table class="table table-dark table-bordered table-striped table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Logo Situs</th>
                        <th>Nama Situs</th>
                        <th>Link Situs</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ $item->image }}" height="55px" /></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->link }}</td>
                            <td><a href="{{ route('sites.edit', $item->id) }}"><button
                                        class="btn btn-warning">EDIT</button></a></td>
                            <td>
                                <form action="{{ route('sites.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Yakin Ingin Hapus ?')">HAPUS</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
