@extends('layouts.articlelayout')
@section('title', 'Home')
@section('content')
    <div class="row g-0">
        <div class="col-12 col-lg-8 mx-auto">
            <img src="{{ asset('/storage/page/banner.webp') }}" alt="Daftar Nana4D" class="w-100 rounded-2">
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-8 col-12 d-flex flex-column bg_transparent mx-auto gap-lg-3 text-center rounded-2 p-2 p-lg-0">
            <livewire:livedraw.macau />
            <livewire:livedraw.sydney />
            <livewire:livedraw.singapore />
            <livewire:livedraw.hongkong />
        </div>
    </div>
@endsection
