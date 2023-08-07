@extends('layouts.adminlayout')
@section('content')
    <div class="d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('predicts.update', $predict->id) }}" class="d-flex flex-column align-items-center gap-1 col-5"
            method="post">
            @csrf
            @method('put')
            <h1 class="text-white">EDIT PASARAN {{ $predict->name }}</h1>
            <div class="input-group">
                <label for="name" class="input-group-text w-25">NAMA PASARAN</label>
                <input type="text" class="form-control" value="{{ $predict->name }}" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="bbfs" class="input-group-text w-25">BBFS</label>
                <input type="text" class="form-control" value="{{ $predict->bbfs }}" id="bbfs" name="bbfs">
            </div>
            <div class="input-group">
                <label for="angkaMain" class="input-group-text w-25">ANGKA MAIN</label>
                <input type="text" class="form-control" value="{{ $predict->angka_main }}" id="angkaMain"
                    name="angka_main">
            </div>
            <div class="input-group">
                <label for="colokBebas" class="input-group-text w-25">COLOK BEBAS</label>
                <input type="text" class="form-control" value="{{ $predict->colok_bebas }}" id="colokBebas"
                    name="colok_bebas">
            </div>
            <div class="input-group">
                <label for="colokMacau" class="input-group-text w-25">COLOK MACAU</label>
                <input type="text" class="form-control" value="{{ $predict->colok_macau }}" id="colokMacau"
                    name="colok_macau">
            </div>
            <div class="input-group">
                <label for="shio" class="input-group-text w-25">SHIO</label>
                <input type="text" class="form-control" value="{{ $predict->shio }}" id="shio" name="shio">
            </div>
            <div class="input-group">
                <label for="open" class="input-group-text w-25">JAM BUKA</label>
                <input type="text" class="form-control" value="{{ $predict->open }}" name="open">
            </div>
            <div class="input-group">
                <label for="close" class="w-25 input-group-text">JAM TUTUP</label>
                <input type="text" class="form-control" id="close" value="{{ $predict->close }}" name="close">
            </div>
            <div class="input-group">
                <label for="article" class="w-25 input-group-text">ARTIKEL</label>
                <textarea name="article" id="article" cols="30" rows="2" class="form-control" autosize>{{ $predict->article }}</textarea>
            </div>
            <div class="d-flex w-100 mt-3 gap-2">
                <button class="btn btn-primary w-50" type="submit">SUBMIT</button>
                <a href="{{ route('predicts.index') }}" class="w-50"><button class="btn btn-danger w-100"
                        type="button">KEMBALI</button></a>
            </div>
        </form>
    </div>
@endsection
