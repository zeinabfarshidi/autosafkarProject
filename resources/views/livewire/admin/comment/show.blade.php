@section('title', 'نظرات')
<div>
    <div class="single-page-container" style="margin-top: 200px" id="contents" wire:init="loadInformation">
        <div class="comments" id="comments">
            <h3 class="post-card-title">{{ $comment->commentable->modelTitle() }}</h3>
            <div class="comments__list">
                @include('livewire.home.comments.comment', $comment)
            </div>
        </div>
        @include('livewire.home.comments.create')
    </div>
</div>
