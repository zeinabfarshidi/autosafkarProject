@if(auth()->user())
    <div class="post-card mb-5" id="comments">
        <form wire:submit.prevent="store()">
            @csrf
            <textarea wire:model="text" name="text" id="" cols="30" rows="10" class="form-control"
                      placeholder="نظر خود را بنویسید"></textarea>
            @error('text')
            <p class="error mt-1">{{ $message }}</p>
            @enderror
            <div class="mt-5 text-center">
                <span class="font-weight-bold ml-3">امتیاز: </span>
                @for($i = 1; $i <= 5; $i++)
                    <i wire:click="scoreNumber({{ $i }})"
                       class="bi ml-3 cursor-pointer @if($i <= $score) text-orange bi-star-fill @else bi-star @endif"></i>
                @endfor
            </div>
            @error('score')
            <p class="error mt-1 text-center">{{ $message }}</p>
            @enderror
            <div class="text-center">
                <button class="btn btn-primary mt-4 btn-primary-box-shadow">ثبت نظر</button>
            </div>
        </form>
    </div>
@else
    <div class="alert alert-primary mt-5 d-flex jsc-space-between alc-center">
        <p>برای ارسال نظر باید وارد سایت شوید</p>
        <a href="{{ route('login') }}" class="btn btn-primary text-white">ورود به سایت</a>
    </div>
@endif
