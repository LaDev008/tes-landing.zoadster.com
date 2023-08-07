@if ($routeProp)
<a href="{{ route($route, $routeProp) }}"
    class="py-2 text-decoration-none fs-4 text-light fw-bold border-bottom border-light w-100 text-center">
    <label for="">{{ $name }}</label>
</a>
@else
<a href="{{ route($route) }}"
    class="py-2 text-decoration-none fs-4 text-light fw-bold border-bottom border-light w-100 text-center">
    <label for="">{{ $name }}</label>
</a>
@endif
