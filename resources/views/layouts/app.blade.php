<!doctype html>
<html lang="fa">
<head>
    <livewire:home.head/>
</head>
<body>
@include('sweet::alert')
<livewire:home.header/>
{{ $slot }}
<livewire:home.footer/>
{{ $scripts ?? '' }}
</body>
</html>
