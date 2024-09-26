<?php $__env->startSection('title', 'افزایش بازدید'); ?>
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.profile.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('l2134301773-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2134301773-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2134301773-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2134301773-0');
} else {
    $response = \Livewire\Livewire::mount('home.profile.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2134301773-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title"><?php echo $__env->yieldContent('title'); ?></h1>
                            </div>
                        </div>
                        <div class="card-body d-flex jsc-space-between p-0 m-0">
                            <div class="w-100 ad-upgrade-list">
                                <small>این امکان، آگهی شما رو به اول لیست آگهی‌ها برمی‌گردونه.</small>
                                <ul>
                                    <?php $__currentLoopData = $upgrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upgrade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="d-flex jsc-start alc-center border-bottom">
                                            <div>
                                                <input type="checkbox"
                                                           <?php if($ad->upgrades->where('id', $upgrade->id)->first()): ?>
                                                               checked disabled
                                                           <?php endif; ?>
                                                       onchange="upgradeItem(event, <?php echo e($upgrade->id); ?>)"
                                                       value="<?php echo e($upgrade->price); ?>"
                                                       name="switch"
                                                       class="switch_chk" id="switch<?php echo e($upgrade->id); ?>">
                                                <label for="switch<?php echo e($upgrade->id); ?>"
                                                       class="switch"><span></span></label>
                                            </div>
                                            <strong><?php echo e($upgrade->title); ?></strong>
                                            <strong><?php echo e($upgrade->price); ?> تومان</strong>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="card-upgrade-payment border">
                                <div class="card-upgrade-payment-header border-bottom">
                                    <form action="">
                                        <div class="d-flex jsc-space-between alc-center discount-code">
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="کد تخفیف‌تون رو وارد کنید">
                                            <button class="btn">
                                                اعمال کد
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <form action="<?php echo e(route('adUpgrade.store')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-upgrade-payment-body">
                                        <strong class="">خلاصه پرداخت</strong>
                                        <input type="hidden" value="<?php echo e(json_encode($upgradeIds)); ?>" name="upgradeIds"
                                               id="upgradeIds" class="form-control">
                                        <input type="hidden" name="ad_id" value="<?php echo e($ad->id); ?>" class="form-control">
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>قیمت</span>
                                            <span><span class="totalPayment">0</span> تومان</span>
                                        </div>
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>تخفیف</span>
                                            <span>0 تومان</span>
                                        </div>
                                    </div>
                                    <div class="card-upgrade-payment-footer">
                                        <div class="d-flex jsc-space-between alc-center">
                                            <span>جمع پرداختی</span>
                                            <span><span class="totalPayment">0</span> تومان</span>
                                        </div>
                                        <button class="btn btn-primary mt-5 w-100">پرداخت <span
                                                class="totalPayment">0</span>
                                            تومان
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
     <?php $__env->slot('scripts', null, []); ?> 
        <script>
            var array = [];
            var upgradeIds = jQuery.parseJSON($('#upgradeIds').val());
            function upgradeItem(event, id){
                var price = $('#switch' + id).val();
                var obj = {};
                if ($('#switch' + id).prop('checked')){
                    array.push(Number(price))
                    upgradeIds.push(id)
                }
                else{
                    array = array.filter((n) => {return n != price});
                    upgradeIds = upgradeIds.filter((n) => {return n != id});
                }
                var sum = 0;
                for (const i in array) {
                    sum = sum + array[i];
                }
                $('.totalPayment').text(sum);
                $('#upgradeIds').val(JSON.stringify(upgradeIds));
            }
        </script>
     <?php $__env->endSlot(); ?>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ad-upgrade/index.blade.php ENDPATH**/ ?>