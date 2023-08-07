@extends('layouts.articlelayout')

@section('title', 'Home')

@section('home', 'active')

@section('stylesheet')

    @include('css.home')

@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 col-12 col-lg-8 mx-auto">
        @foreach ($predicts as $predict)
            <x-predict-card :item="$predict" />
        @endforeach
    </div>
@endsection
