<?php $__env->startSection('title', 'ویرایش'); ?>
<div>
    <main class="body">
        <div class="container post_container">
            <div class="card border-0">
                <div class="card-header border-0">
                    <h1 class="form_title">ویرایش</h1>
                </div>
                <div class="card-body pt-0 border-0">
                    <form wire:submit.prevent="store()" class="">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div class="mb-0">
                                <div class="form-group mb-2">
                                    <label for="name" class="font-size-12 font-weight-bold mb-2">نام و نام
                                        خانوادگی</label>
                                    <input type="text" wire:model.lazy="user.name" class="form-control" id="name">
                                    <?php $__errorArgs = ['user.name'];
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
                                    <label for="mobile" class="font-size-12 font-weight-bold mb-2">شماره موبایل</label>
                                    <div class="form-control" id="mobile"><?php echo e($user->mobile); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-size-12 font-weight-bold mb-2">ایمیل</label>
                                    <input type="text" wire:model.lazy="user.email" class="form-control" id="email">
                                    <?php $__errorArgs = ['user.email'];
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
                            <div class="mb-0">
                                <div class="form-group mb-2">
                                    <label for="mainActivity" class="font-size-12 font-weight-bold mb-2">حوزه اصلی
                                        فعالیت</label>
                                    <select wire:model.lazy="user.ad_category_id" name="ad_category_id"
                                            class="form-control">
                                        <option value="">حوزه اصلی فعالیت</option>
                                        <?php $__currentLoopData = $adCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($adCategory->id); ?>"
                                                    <?php if($user->profile && $adCategory->id == $user->profile->ad_category_id): ?> selected <?php endif; ?>>
                                                <?php echo e($adCategory->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['user.ad_category_id'];
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
                                    <label for="workTime" class="font-size-12 font-weight-bold mb-2">ساعت کار</label>
                                    <input type="text" wire:model.lazy="user.workTime"
                                           value="<?php if($user->rofile): ?> <?php echo e($user->profile->workTime); ?> <?php endif; ?>"
                                           class="form-control"
                                           id="workTime" placeholder="ایام هفته و ساعت کاری در روز">
                                    <?php $__errorArgs = ['user.workTime'];
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
                                <div class="form-group">
                                    <label for="workTime" class="font-size-12 font-weight-bold mb-2">محدوده
                                        فعالیت</label>
                                    <div class="d-flex w-div-32 jsc-space-between alc-center flex-wrap flex-direction">
                                        <div>
                                            <select wire:model.lazy="user.state_id" wire:change="stateItem"
                                                    name="state_id" id=""
                                                    class="form-control mb-2">
                                                <option value="">استان</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($state->id); ?>"
                                                        <?php echo e($user->rofile && $state->id == $user->profile->state_id ? 'selected' : ''); ?>>
                                                        <?php echo e($state->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['user.state_id'];
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
                                            <select wire:model.lazy="user.city_id" wire:change="cityItem" name="city_id"
                                                    id=""
                                                    class="form-control mb-2">
                                                <option value="">شهر</option>
                                                <?php $__currentLoopData = $listOfCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($city->id); ?>"
                                                        <?php echo e($user->profile &&  $state->id == $user->profile->city_id ? 'selected' : ''); ?>>
                                                        <?php echo e($city->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['user.city_id'];
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
                                            <select wire:model.lazy="user.area_id" name="area_id"
                                                    class="form-control">
                                                <option value="">منطقه</option>
                                                <?php $__currentLoopData = $listOfRegions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($area->id); ?>"
                                                        <?php echo e($user->profile &&  $state->id == $user->profile->area_id ? 'selected' : ''); ?>>
                                                        <?php echo e($area->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['user.area_id'];
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
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description" class="font-size-12 font-weight-bold mb-2">توضیحات</label>
                                <textarea wire:model.lazy="user.description" class="form-control textarea" rows="2"
                                          id="description">
                                    <?php if($user->profile): ?>
                                        <?php echo $state->id == $user->profile->description; ?>

                                    <?php endif; ?>
                                </textarea>
                                <?php $__errorArgs = ['user.description'];
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
                                <label for="myDistinction" class="font-size-12 font-weight-bold mb-2">تمایز من</label>
                                <textarea wire:model.lazy="user.myDistinction" class="form-control textarea" rows="2"
                                          id="myDistinction">
                                    <?php if($user->profile): ?>
                                        <?php echo $state->id == $user->profile->myDistinction; ?>

                                    <?php endif; ?>
                                </textarea>
                                <?php $__errorArgs = ['user.myDistinction'];
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
                        <hr class="mt-4 mb-4 bg-primary" style="height: 2px">
                        <div class="d-flex w-div-49 jsc-space-between flex-wrap flex-direction">
                            <div class="form-group mb-2">
                                <label for="name" class="font-size-12 font-weight-bold mb-2">فعالیت های فرعی (حداکثر
                                    5 مورد): </label>
                                <div class="d-flex jsc-start alc-center item">
                                    <a wire:click="subActivityAdd"
                                            class="btn btn-primary text-white cursor-pointer ml-3">
                                        افزودن
                                    </a>
                                    <input type="text" wire:model="subActivityTitle" class="form-control" id="name">
                                </div>
                                <div class="alert">
                                    <?php $__currentLoopData = $user->subActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subActivity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteSubActivity(<?php echo e($subActivity->id); ?>)"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            <?php echo e($subActivity->title); ?>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="name" class="font-size-12 font-weight-bold mb-2">شبکه های اجتماعی: </label>
                                <div class="d-flex jsc-start alc-center item">
                                    <span wire:click="addSocialMedia"
                                          class="btn btn-primary ml-3 text-white cursor-pointer">افزودن</span>
                                    <select wire:model="socialMediaName" class="form-control">
                                        <option value="">شبکه اجتماعی</option>
                                        <option value="telegram">تلگرام</option>
                                        <option value="instagram">اینستاگرام</option>
                                        <option value="aparat">آپارات</option>
                                        <option value="youtube">یوتوب</option>
                                    </select>
                                    <input type="text" wire:model="socialMediaLink" class="form-control"
                                           placeholder="لینک" id="name">
                                </div>
                                <div class="alert">
                                    <?php $__currentLoopData = $user->socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="badge border text-dark mb-2">
                                            <i wire:click="deleteSocialMedia(<?php echo e($socialMedia->id); ?>)"
                                               class="bi bi-x font-size-15 cursor-pointer"></i>
                                            <a href="<?php echo e($socialMedia->link); ?>"><?php echo e($socialMedia->name); ?></a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">ثبت تغییرات</button>
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
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/home/profile/update.blade.php ENDPATH**/ ?>