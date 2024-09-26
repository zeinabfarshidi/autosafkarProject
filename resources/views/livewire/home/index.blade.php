@section('title', 'صفحه اصلی')
<div>
    <main class="body">
        <div class="landing_slider">
            <div class="d-flex container_slider_content">
                <div class="text_service">
                    <h1 class="services_title">صافکاری بی رنگ ماشین خارجی و داخلی</h1>
                    <h3 class="service_desc">کمترین قیمت صافکاری بی رنگ با دستگاه در ایران</h3>
                </div>
                <div class="service_btn">
                    <div class="d-flex jsc-end">
                        <div class="service_btn_box">
                            <div>
                                <a href="{{ route('ad.create') }}" class="button btn_warning">ثبت رایگان آگهی صافکاری یا
                                    تعمیرگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post_container mt-5" style="margin-bottom: 300px">
            <div class="d-flex jsc-start alc-center w-div-24">
                @foreach($ads as $ad)
                    <div class="card post_card cardAd ad-item box-shadow">
                        <div class="card-header p-0 position-relative">
                            <a href="{{ route('ad.show', $ad->id) }}" target="_blank" class="">
                                <img src="{{ asset('storage/' . $ad->adImages->where('originalPhoto', true)->first()->img) }}" alt="" class="" width="100%">
                                @if($ad->upgrades->count() > 0)
                                    <div class="ad_upgrade_list">
                                        @foreach($ad->upgrades as $upgrade)
                                            <span>{{ $upgrade->title }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex jsc-space-between alc-center">
                                <span class="badge bg-primary">{{ $ad->adCategory->name }}</span>
                                <span class="badge bg-secondary">{{ $ad->state->name }} / {{ $ad->city->name }}</span>
                                <span class="badge bg-success">مورد تایید</span>
                            </div>
                            <div class="post_content">
                                <h2 class="post_title">
                                    <a href="{{ route('ad.show', $ad->id) }}" class="" target="_blank">{{ $ad->title }}</a>
                                </h2>
                                <div class="d-flex jsc-space-between alc-center post_user">
                                    <div>متعلق به: <span>{{ $ad->user->name }}</span></div>
                                </div>
                                <p class="post_description">{!! $ad->description !!}</p>
                                <div class="post_contact_us">
                                    <a class="btn btn-light border text-primary w-100">
                                        <i class="bi bi-telephone"></i>
                                        {{ $ad->mobile }}
                                    </a>
                                    <a class="btn btn-light border text-primary">
                                        <i class="bi bi-geo-alt"></i>
                                        لوکیشن
                                    </a>
                                    <a class="btn btn-light border text-primary">
                                        <i class="bi bi-chat-dots"></i>
                                        چت
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <a class="text-primary w-auto"><i class="bi bi-suit-heart"></i></a>
                                <time class="font-size-12">{{ $ad->created_at_difference() }}</time>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </main>
</div>
