@extends('layouts.articlelayout')
@section('title', 'Lomba Nana Group')
@section('content')
    <div class="row g-0">
        <div class="col-12 col-lg-8 mx-auto bg-dark d-flex flex-wrap text-center" style="border: 4px ridge magenta ">
            @if ($events->isEmpty())
                <h1 class="text-white text-center col-12">TIDAK ADA LOMBA TOGEL TERSEDIA.</h1>
                <h4 class="text-white mt-3 text-center col-12">NANTIKAN LOMBA TOGEL MENARIK LAINNYA DARI NANAGROUP.
                </h4>
            @endif
            @foreach ($events as $event)
                <livewire:event-card :event="$event" />
            @endforeach
        </div>
    </div>
@endsection
