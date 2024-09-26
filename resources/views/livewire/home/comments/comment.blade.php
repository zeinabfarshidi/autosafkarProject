<div id="comment-13" class="comment__id__confirmation border-bottom pb-3">
    <div class="comments__box comments__subset_border-right">
        <div class="comments__inner">
            <div class="comments__header">
                <div class="comments__row">
                    <div class="d-flex flex-grow-1">
                        <div class="comments__details d-flex alc-start" id="comments__details13">
                            <h5 class="comments__author ml-4 d-flex flex-direction-column">
                                <span class="comments__author-name font-weight-bold mb-2">
                                    {{ $comment->user->name }}
                                </span>
                                <span class="comments__author-name font-weight-bold">
                                    {{ $comment->user->email }}
                                </span>
                            </h5>
                            <div class="answer__date">
                                <span class="comments_date">{{ $comment->created_at_difference() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comments__body">
                @if($comment->score)
                    <strong class="">{{ $comment->score }} امتیاز</strong>
                @endif
                <p class="font-size-13" id="content_reply_13">
                    {!! $comment->text !!}
                </p>
                <a href="#comments">
                    <i wire:click="commentId({{ $comment->id }})"
                       class="bi bi-reply-fill cursor-pointer" title="پاسخ"></i>
                </a>
                @if($comment->comments->where('status', 'تایید شده')->count() > 0)
                    <span class="font-weight-bold showAnswer cursor-pointer"
                          onclick="showAnswer(event, {{ $comment->id }})">
                        <i class="bi bi-chevron-down"></i>
                        نمایش {{ $comment->comments->where('status', 'تایید شده')->count() }} پاسخ
                    </span>
                @endif
            </div>
        </div>
        @if($comment->comments->where('status', 'تایید شده')->count() > 0)
            <div class="d-none" id="answers{{ $comment->id }}">
                @foreach($comment->comments as $reply)
                    @include('livewire.home.comments.replies', ['reply' => $reply])
                @endforeach
            </div>
        @endif
    </div>
</div>
