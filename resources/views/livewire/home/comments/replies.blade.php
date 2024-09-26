<div class="comments__subset  comment__id__confirmation">
    <div id="comment-4">
        <div class="comments__box">
            <div class="comments__inner">
                <div class="comments__header">
                    <div class="comments__row">
                        <div class="d-flex flex-grow-1">
                            <div class="comments__details d-flex alc-start" id="comments__details13">
                                <h5 class="comments__author ml-4 d-flex flex-direction-column">
                                <span class="comments__author-name font-weight-bold mb-2">
                                    {{ $reply->user->name }}
                                </span>
                                    <span class="comments__author-name font-weight-bold">
                                    {{ $reply->user->email }}
                                </span>
                                </h5>
                                <div class="answer__date">
                                    <span class="comments_date">{{ $reply->created_at_difference() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments__body">
                    @if($reply->score)
                        <strong class="">{{ $reply->score }} امتیاز</strong>
                    @endif
                    <p class="status__body font-size-13">{!! $reply->text !!}</p>
                    <a href="#comments">
                        <i wire:click="commentId({{ $reply->id }})"
                           class="bi bi-reply-fill cursor-pointer" title="پاسخ"></i>
                    </a>
                    @if($reply->comments->where('status', 'تایید شده')->count() > 0)
                        <span class="font-weight-bold showAnswer cursor-pointer"
                              onclick="showReplies(event, {{ $reply->id }})">
                            <i class="bi bi-chevron-down"></i>
                        نمایش {{ $reply->comments->where('status', 'تایید شده')->count() }} پاسخ
                        </span>
                    @endif
                </div>
            </div>
            @if($reply->comments->where('status', 'تایید شده')->count() > 0)
                <div class="d-none" id="replies{{ $reply->id }}">
                    @foreach($reply->comments->where('status', 'تایید شده') as $item)
                        @include('livewire.home.comments.replies', ['reply' => $item])
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
