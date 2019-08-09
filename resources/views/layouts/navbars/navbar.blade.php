@if (auth()->check() && request()->route()->getName() != null)
    @include('layouts.navbars.navs.auth')
@else
    @include('layouts.navbars.navs.guest')
@endif