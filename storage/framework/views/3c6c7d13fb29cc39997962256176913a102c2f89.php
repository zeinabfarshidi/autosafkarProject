<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title">ثبت آگهی</h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="post_form">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.ad_category_id" name="ad_category_id"
                                            class="form-control">
                                        <option value="">انتخاب دسته بندی آگهی</option>
                                        <?php $__currentLoopData = $adCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($adCategory->id); ?>"><?php echo e($adCategory->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['ad.ad_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.state_id" wire:change="stateItem" name="state_id" id=""
                                            class="form-control">
                                        <option value="">استان</option>
                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['ad.state_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.city_id" wire:change="cityItem" name="city_id" id=""
                                            class="form-control">
                                        <option value="">شهر</option>
                                        <?php $__currentLoopData = $listOfCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['ad.city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <select wire:model.lazy="ad.area_id" name="area_id" id="" class="form-control">
                                        <option value="">منطقه</option>
                                        <?php $__currentLoopData = $listOfRegions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['ad.area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <input wire:model.lazy="ad.title" type="text" placeholder="عنوان آگهی"
                                           class="form-control">
                                    <?php $__errorArgs = ['ad.title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <input wire:model.lazy="ad.mobile" type="text" placeholder="شماره تماس با آگهی"
                                           class="form-control">
                                    <?php $__errorArgs = ['ad.mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2 w-div-49 d-flex jsc-space-between alc-center">
                                    <div>
                                        <input wire:model.lazy="ad.minPrice" type="text" placeholder="کمترین قیمت"
                                               class="form-control" onkeypress="return isNumberKey(this, event);"
                                               oninput="this.value = this.value.replace(/^0/g, '');">
                                        <?php $__errorArgs = ['ad.minPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="error mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div>
                                        <input wire:model.lazy="ad.maxPrice" type="text" placeholder="بیشترین قیمت"
                                               class="form-control" onkeypress="return isNumberKey(this, event);"
                                               oninput="this.value = this.value.replace(/^0/g, '');">
                                        <?php $__errorArgs = ['ad.maxPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="error mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <textarea wire:model.lazy="ad.description" class="form-control textarea" rows="2"
                                              id="description" placeholder="توضیحات"
                                              style="box-shadow: none;"></textarea>
                                    <?php $__errorArgs = ['ad.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div>
                                <h2 class="form_label" id="form_label">انتخاب عکس</h2>
                                <div
                                    class="d-flex w-div-22 jsc-start flex-wrap flex-direction position-relative input_file_row">
                                    <?php if(count($images) < 7): ?>
                                        <div class="form-group d-flex jsc-center alc-center p-0 input_file_box upload_box">
                                            <input type="file" wire:model.lazy="img"
                                                   wire:change="addImage" class="input_file">
                                        </div>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card d-flex jsc-center alc-center p-0 input_file_box mr-20">
                                            <div class="card-header">
                                                <div class="header__account">
                                                    <span class="auth__user-name text-dark" onclick="photoFeatures(event, <?php echo e($key); ?>)"><i class="bi bi-three-dots-vertical"></i></span>
                                                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none" id="photoFeatures<?php echo e($key); ?>">
                                                        <div class="header__dropdown-content">
                                                            <a wire:click="original_photo(<?php echo e($key); ?>)" class="header__account-link">انتخاب به عنوان عکس اصلی</a>
                                                            <a wire:click="delete(<?php echo e($key); ?>)" class="header__account-link">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="<?php echo e($value->temporaryUrl()); ?>" alt="">
                                            <?php if($key + 1 == $originalPhoto): ?>
                                                <div class="card-footer originalPhoto">تصویر اصلی</div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($img): ?>
                                        <div class="card d-flex jsc-center alc-center p-0 input_file_box mr-20">
                                            <div class="card-header">
                                                <div class="header__account">
                                                    <span class="auth__user-name text-dark" onclick="photoFeatures(event, 'Img')">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </span>
                                                    <div class="header__dropdown header__dropdown--w200 header__dropdown--is-active d-none" id="photoFeaturesImg">
                                                        <div class="header__dropdown-content">
                                                            <a wire:click="original_photo_img" class="header__account-link">انتخاب به عنوان عکس اصلی</a>
                                                            <a wire:click="deleteImg" class="header__account-link">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="<?php echo e($img->temporaryUrl()); ?>" alt="">
                                            <?php if($originalPhoto == 'img'): ?>
                                                <div class="card-footer originalPhoto">تصویر اصلی</div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <span class="mt-4 text-danger font-size-12 mb-1" wire:loading
                                      wire:target="img">در حال آپلود ...</span>
                                <div wire:ignore class="progress" id="progressbar" style="display: none">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                                </div>
                                <div class="form-group">
                                    <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <?php $__errorArgs = ['originalPhoto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error mt-2"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <button class="btn btn-primary mt-5">ثبت آگهی</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


















    </main>
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع آپلود');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('ارور موقع آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        })
    </script>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/ad/create.blade.php ENDPATH**/ ?>