@section('title', 'حساب من')
<div>
    <main class="body">
        <div class="container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <livewire:home.profile.sidebar />
                <div class="content">
                    <div class="card border-0 font-size-14">
                            <div class="card-header d-flex jsc-space-between alc-center">
                                <h1 class="form_title">پروفایل</h1>
                                <div class="alert alert-warning d-flex jsc-space-between alc-center alert-profile p-2">
                                    <p>اطلاعات پروفایل خود را کامل کنید</p>
                                    <a href="{{ route('profile.update') }}" class="text-primary font-weight-bold ">ویرایش</a>
                                </div>
                            </div>
                            <div class="card-body w-div-49 d-flex jsc-space-between">
                                <div>
                                    <div class="mb-3"><strong>{{ auth()->user()->name }}</strong></div>
                                    <div class="mb-3"><strong>{{ auth()->user()->email }}</strong></div>
                                    <div class="mb-3"><strong>{{ auth()->user()->mobile }}</strong></div>
                                </div>
                                @if(auth()->user()->profile && auth()->user()->profile->adCategory)
                                    <div>
                                        <div class="mb-3">حوزه اصلی فعالیت: <strong>
                                                {{ auth()->user()->profile->adCategory->name }}
                                            </strong>
                                        </div>
                                        <div class="mb-3">
                                            حوزه فعالیت های فرعی:
                                            <p>
                                                @foreach(auth()->user()->subActivities as $subActivity)
                                                    <span class="badge bg-secondary p-2 font-weight-normal">{{ $subActivity->title }}</span>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="mb-3">ساعت کاری: <strong>{{ auth()->user()->profile->workTime }}</strong></div>
                                        <div class="mb-3">محدوده فعالیت: <strong>
                                                {{ auth()->user()->profile->state->name . ' , ' . auth()->user()->profile->city->name . ' , ' . auth()->user()->profile->area->name }}
                                            </strong></div>
                                        <div class="mb-3">
                                            @foreach(auth()->user()->socialMedias as $socialMedia)
                                                <a href="{{ $socialMedia->link }}" class="text-primary ml-3">{{ $socialMedia->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        توضیحات:
                                        <p>{!! auth()->user()->profile->description !!}</p>
                                    </div>
                                    <div class="w-100">
                                        تمایز من:
                                        <p>{!! auth()->user()->profile->myDistinction !!}</p>
                                    </div>
                                @endif
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </main>
</div>
