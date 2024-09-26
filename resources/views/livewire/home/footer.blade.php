<footer class="footer">
    <a class="scroll-top"></a>
    <div class="container">
        <div class="">
            <ul class="footer__links">
                {{--                @foreach($footers as $footer)--}}
                {{--                    <li class="footer__item"><a @if($footer->link) href="{{ $footer->link }}"--}}
                {{--                                                @endif class="footer__link">{{ $footer->name }}</a>--}}
                {{--                        <div class="">--}}
                {{--                            @foreach($footer->children as $childFooter)--}}
                {{--                                <a @if($childFooter->link) href="{{ $childFooter->link }}"--}}
                {{--                                   @endif class="footer__link-sub">{{ $childFooter->name }}</a>--}}
                {{--                            @endforeach--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                @endforeach--}}
            </ul>
        </div>
        <div class="footer__hr"></div>
    </div>
</footer>
<div class="overlay"></div>
<script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="{{ asset('home/js/js.js') }}"></script>
<script src="{{ asset('home/js/js2.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
<script src="{{ asset('js/sweetalert2@11.js') }}"></script>
<livewire:scripts />
{{ $scripts ?? '' }}
<script src="{{ mix('/js/app.js') }}"></script>

