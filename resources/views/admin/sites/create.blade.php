@extends('layouts.adminlayout')
@section('title', 'Buat Situs Baru')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('sites.store') }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST" enctype="multipart/form-data">
            @csrf
            <h1>BUAT SITUS BARU</h1>

            <div class="input-group">
                <label for="photo" class="input-group-text">LOGO</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>
            @error('photo')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Situs</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required>
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="link" class="w-25 input-group-text">Link Situs</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            @error('link')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">CREATE</button>
                <a href="{{ route('sites.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
