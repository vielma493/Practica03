@if (Route::has('login'))
<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        @include("menu2")
    @else
        @include("menu1")
        @endif
        @endauth