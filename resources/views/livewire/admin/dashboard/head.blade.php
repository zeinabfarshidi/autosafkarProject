<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<title>پنل مدیریت اتوصافکار | @yield('title')</title>
<link rel="stylesheet" href="{{ asset('adminPanel/css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminPanel/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('adminPanel/css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('adminPanel/css/responsive_991.css') }}" media="(max-width:991px)">
<link rel="stylesheet" href="{{ asset('adminPanel/css/responsive_768.css') }}" media="(max-width:768px)">
<link rel="stylesheet" href="{{ asset('css/responsive_768.css') }}" media="(max-width:768px)">
<link rel="stylesheet" href="{{ asset('adminPanel/css/font.css') }}">
<link rel="stylesheet" href="{{ asset('icons/bootstrap-icons.min.css') }}">
{{--<script src="{{ asset('js/ckeditor.js') }}"></script>--}}
<livewire:styles />
<style>
    .breadcrumb{
        display: block;
    }
</style>
<script src="{{ mix('/js/app.js') }}"></script>
