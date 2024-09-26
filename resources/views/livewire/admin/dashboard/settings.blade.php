<div class="sidebar__setting border-top border-left box-shadow">
    <div class="card border-0">
        <div class="card-header font-size-12">تنظیمات دسترسی های مجاز</div>
        <div class="card-body">
            <input type="hidden" value="{{ request()->route()->getName() }}" class="form-control" id="current_route_name">
            @if($roles->count() > 0)
                @foreach($roles as $role)
                    <div class="d-flex jsc-space-between alc-center">
                        <label class="font-size-13" for="">{{ $role->name }}</label>
                        <button id="acces__{{ $role->id }}" onclick="acces__status(event, {{ $role->id }})"
                                class="badge @if(\App\Models\Acces::where('role_id', $role->id)->where('route_name', request()->route()->getName())->where('status', true)->first()) btn-danger @else btn-primary @endif">
                            @if(\App\Models\Acces::where('role_id', $role->id)->where('route_name', request()->route()->getName())->where('status', true)->first())
                                block
                            @else
                                unblock
                            @endif
                        </button>
                    </div>
                @endforeach
            @else
                <p class="font-size-13">سطح کاربری برای نمایش وجود ندارد</p>
            @endif
        </div>
    </div>

{{--    <div class="card border-0">--}}
{{--        <div class="card-header font-size-12">تنظیمات دسترسی به همه اطلاعات</div>--}}
{{--        <div class="card-body">--}}
{{--            <input type="text" class="form-control" id="className">--}}
{{--            @if($roles->count() > 0)--}}
{{--                @foreach($roles as $role)--}}
{{--                    <div class="d-flex jsc-space-between alc-center">--}}
{{--                        <label class="font-size-13" for="">{{ $role->name }}</label>--}}
{{--                        <button id="accessToInfo__{{ $role->id }}" onclick="allInfoAccessSettings(event, {{ $role->id }})"--}}
{{--                                class="badge @if(\App\Models\AccessToInfo::where('role_id', $role->id)->where('class_name', request()->route()->getName())->where('status', true)->first()) btn-danger @else btn-primary @endif">--}}
{{--                            @if(\App\Models\Acces::where('role_id', $role->id)->where('route_name', request()->route()->getName())->where('status', true)->first())--}}
{{--                                block--}}
{{--                            @else--}}
{{--                                unblock--}}
{{--                            @endif--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <p class="font-size-13">سطح کاربری برای نمایش وجود ندارد</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
