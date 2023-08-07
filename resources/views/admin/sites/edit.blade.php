@extends('layouts.adminlayout')
@section('title', 'Edit Situs')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('sites.update', $site->id) }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>EDIT SITUS</h1>

            <div class="d-flex w-100">
                <div class="w-50 d-flex flex-column mx-auto">
                    <label for="">OLD:</label>
                    <img src="{{ $site->image }}" class="d-block w-100" />
                </div>
            </div>

            <div class="input-group">
                <label for="photo" class="input-group-text">LOGO</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Situs</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required
                    value="{{ $site->name }}">
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="link" class="w-25 input-group-text">Link Situs</label>
                <input type="text" class="form-control" id="link" name="link" required
                    value="{{ $site->link }}">
            </div>
            @error('link')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">SUBMIT</button>
                <a href="{{ route('sites.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
