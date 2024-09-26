<div class="breadcrumb">
    <ul>
        <li><a href="{{ route('dashboard') }}">داشبورد</a></li>
        @if(request()->is('admin/*'))
            <li><a href="{{ request()->url() }}">@yield('title')</a></li>
        @endif
    </ul>
</div>
