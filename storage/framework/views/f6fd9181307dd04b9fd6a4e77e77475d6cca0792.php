<?php $__env->startSection('title', $order->problem); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l3713888763-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3713888763-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3713888763-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3713888763-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3713888763-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                                <div class="">
                                    <div class="font-size-12">تاریخ سفارش:
                                        <strong><?php echo e(verta($order->created_at)->format('Y/m/d')); ?></strong>
                                    </div>
                                    <?php if(auth()->user()->id == $order->user_id && !$order->tender): ?>
                                        <a href="<?php echo e(route('tender.create', $order->id)); ?>"
                                           class="btn btn-primary text-white mt-3 w-100">مناقصه</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex btn-status">
                                <button
                                    class="btn text-dark border-radius-0 <?php echo e($view == 'description' ? 'btn-active' : ''); ?>"
                                    wire:click="desc">توضیحات
                                </button>
                                <button
                                    class="btn text-dark border-radius-0 <?php echo e($view == 'serviceProviders' ? 'btn-active' : ''); ?>"
                                    wire:click="serviceProviders">خدمات دهنده ها
                                </button>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orderConfirmation', $order)): ?>
                                    <button
                                        class="btn text-dark border-radius-0 <?php echo e($view == 'requestConfirmation' ? 'btn-active' : ''); ?>"
                                        wire:click="requestConfirmation">
                                        ثبت پیشنهاد
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <?php if($view == 'description'): ?>
                                <img src="<?php echo e(asset('storage/'. $order->img)); ?>"
                                     class="w-100 border-radius-3 single-page-request-img" alt="">
                                <p class="mt-4"><?php echo $order->description; ?></p>
                            <?php elseif($view == 'serviceProviders' && $order->offers->count() > 0): ?>
                                <div class="table__box w-100">
                                    <table class="table table_ad">
                                        <tbody>
                                        <?php $__currentLoopData = $order->offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" align="right">
                                                <td class="tenderOffer">
                                                    <img src="<?php echo e(asset('storage/' . $offer->user->img)); ?>"
                                                         alt=""
                                                         class="border-radius-3">
                                                </td>
                                                <td class="td-ad-img">
                                                    <h3 class="title_h2"><?php echo e($offer->user->name); ?></h3>
                                                    <strong><?php echo e($offer->user->mobile); ?></strong>
                                                    <div>قیمت : <strong class=""><?php echo e($offer->price); ?>

                                                            تومان</strong></div>
                                                    <div>مدت زمان انجام کار: <strong><?php echo e($offer->numberDays . ' روز'); ?></strong></div>
                                                </td>
                                                <td>
                                                    <p class="content_col"><?php echo $offer->description; ?></p>
                                                </td>
                                                <td>
                                                    <input type="radio" wire:change="cooperation(<?php echo e($offer->id); ?>)"
                                                           <?php echo e($offer->cooperation ? 'checked' : ''); ?> value="366"
                                                           name="switch" class="switch_chk" id="switch<?php echo e($offer->id); ?>">
                                                    <label for="switch<?php echo e($offer->id); ?>"
                                                           class="switch"><span></span></label>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php elseif($view == 'requestConfirmation'): ?>
                                <div class="w-div-49 w-100">
                                    <div class="m-auto">
                                        <form wire:submit.prevent="store()">
                                            <div>
                                                <label for="price">قیمت انجام کار</label>
                                                <input type="text" wire:model.lazy="price" id="price"
                                                       class="form-control"
                                                       onkeypress="return isNumberKey(this, event);"
                                                       oninput="this.value = this.value.replace(/^0/g, '');"
                                                       placeholder="تومان">
                                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="error"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mt-3">
                                                <label for="numberDays">مدت زمان انجام کار</label>
                                                <input type="text" wire:model.lazy="numberDays" id="numberDays"
                                                       class="form-control"
                                                       onkeypress="return isNumberKey(this, event);"
                                                       oninput="this.value = this.value.replace(/^0/g, '');"
                                                       placeholder="تعداد روز">
                                                <?php $__errorArgs = ['numberDays'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="error"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mt-3">
                                                <label for="description">توضیحات و نحوه انجام کار</label>
                                                <textarea wire:model.lazy="description" id="description"
                                                          class="form-control"
                                                          placeholder="توضیحات"></textarea>
                                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="error"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <button class="btn btn-primary text-white mt-3">ارسال</button>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php if($this->cooperationExpirationDate()): ?>
        <div class="swalContainer">
            <div class="swalConfirm d-flex jsc-center alc-center" >
                <div class="card bg-white">
                    <div class="card-header d-flex jsc-space-between alc-center pb-3">
                        <h2 class="swalConfirmTitle">سفارش شما توسط <?php echo e($order->cooperation->offer->user->name); ?> انجام شد؟</h2>
                        <span class="font-size-24 cursor-pointer" wire:click="close">x</span>
                    </div>
                    <div class="card-body p-0">
                        <form wire:submit.prevent="resultCooperation()">
                            <div class="d-flex jsc-space-between alc-center mt-3">
                                <div>
                                    <input type="radio" wire:model="do" name="do" value="do" id="done">
                                    <label for="done">انجام شد</label>
                                </div>
                                <div>
                                    <input type="radio" wire:model="do" name="do" value="not-done" id="not-done">
                                    <label for="not-done">انجام نشد</label>
                                </div>
                            </div>
                            <?php if($do == 'not-done'): ?>
                                <div class="notificationGroup mt-3">
                                    <input type="checkbox" wire:model="delay" name="delay" class="form-control" id="option4">
                                    <label for="option4">اعلام تاخیر: </label>
                                </div>
                            <?php endif; ?>
                            <?php if($do == 'do'): ?>
                                <div class="border mt-4 p-4 border-radius-3">
                                    <p class="text-center">خدمات <?php echo e($order->cooperation->offer->user->name); ?> چطور بود؟</p>
                                    <div class="d-flex jsc-space-around alc-center">
                                        <div>
                                            <input type="radio" wire:model="result" name="result" id="satisfaction" value="satisfaction">
                                            <label for="satisfaction">رضایت</label>
                                        </div>
                                        <div>
                                            <input type="radio" wire:model="result" name="result" id="dissatisfaction" value="dissatisfaction">
                                            <label for="dissatisfaction">عدم رضایت</label>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($do): ?>
                                <textarea wire:model="opinion" class="form-control mt-3 textarea font-size-13"
                                          placeholder="<?php if($do == 'do'): ?> نظرتان را درباره خدمات ارائه شده اینجا بنویسید <?php elseif($do == 'not-done'): ?> چرا انجام نشد؟ توضیح دهید <?php endif; ?>"></textarea>
                            <?php endif; ?>
                            <button class="btn btn-primary w-100 mt-4" <?php if(!$do || $do == 'do' && !$result): ?> disabled <?php endif; ?>>ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>





</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/order/show.blade.php ENDPATH**/ ?>