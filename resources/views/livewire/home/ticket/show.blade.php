@section('title', 'تیکت')
<div>
    <main class="body border-bottom" wire:init="loadInformation">
        <div class="single-page-container">
            <header class="postHeader">
{{--                <h1 class="title_h">{{ $ticket->ticketable->name() }}</h1>--}}
                <div class="post-author">
                    <div class="post-author-img">
                        @if($ticket->user->img)
                            <img alt="" src="{{ asset('storage/' . $ticket->user->img) }}">
                        @else
                            <img alt="" src="{{ asset('home/img/profile.jpg') }}">
                        @endif
                    </div>
                    <span>{{ $ticket->user->name }}</span>
                </div>
                <div class="post-details mt-3">
                    <span class="">{{ verta($ticket->created_at)->format('Y/m/d') }}</span>
                </div>
            </header>
            <div class="d-flex jsc-space-between alc-start single-page-post-content">
                <div class="single-page-right">
                    <div class="post-content">
                        <div class="post-content-text">{!! $ticket->text !!}</div>
                    </div>
                </div>
            </div>
            @if($ticket->tickets_count > 0)
                <span class="font-weight-bold">پاسخ ها: </span>
                @foreach($ticket->tickets as $reply)
                    <div class="comment__id__confirmation pb-3 border-radius-3">
                        <div class="comments__box">
                            <div class="comments__inner">
                                <div class="comments__header">
                                    <div class="comments__row">
                                        <div class="d-flex flex-grow-1">
                                            <div class="comments__details" id="comments__details13">
                                                <div class="answer__date">
                                                    <span class="comments_date">{{ $reply->created_at_difference() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="comments__body font-size-13" id="content_reply_13">{!! $reply->text !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </main>

    <div class="single-page-container mb-5">
        <span class="font-weight-bold mb-3">پاسخ</span>
        <form wire:submit.prevent="store">
            <textarea wire:model="text" id="" cols="30" rows="10" class="form-control"
                      placeholder="پاسخ به تیکت"></textarea>
            @error('text')
            <p class="error mt-1">{{ $message }}</p>
            @enderror
            <div class="text-center">
                <button class="btn btn-primary mt-4 btn-primary-box-shadow">ارسال</button>
            </div>
        </form>
    </div>
</div>
