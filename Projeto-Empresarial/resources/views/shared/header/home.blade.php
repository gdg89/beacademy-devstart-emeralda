@php
$user = Auth::user();
@endphp

@if (isset($user->isAdmin) && $user->isAdmin)
<a href="/admin/produtos" class="header-nav-link">
    Admin
</a>
@endif

@if(Route::currentRouteName() === 'home' || Route::currentRouteName() === 'product.show' )
@include('shared.header.cartButton')
@endif

@if ($user)

@include('shared.header.avatar')

@else

<a href="/login" class="header-nav-link">
    Entrar
</a>

@endif
