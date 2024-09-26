<!DOCTYPE html>
<html lang="en">
<head>
    <livewire:admin.dashboard.head />
</head>
<body>
@include('sweet::alert')
<livewire:admin.dashboard.sidebar />
<div class="content">
    <livewire:admin.dashboard.header />
    @include('livewire.admin.dashboard.breadcrumb')
{{--    <livewire:admin.dashboard.settings />--}}
    {{ $slot }}
</div>
</body>
<livewire:admin.dashboard.footer />
{{ $scripts ?? '' }}
</html>
