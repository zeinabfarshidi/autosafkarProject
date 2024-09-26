<div class="breadcrumb">
    <ul>
        <li><a href="<?php echo e(route('dashboard')); ?>">داشبورد</a></li>
        <?php if(request()->is('admin/*')): ?>
            <li><a href="<?php echo e(request()->url()); ?>"><?php echo $__env->yieldContent('title'); ?></a></li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/livewire/admin/dashboard/breadcrumb.blade.php ENDPATH**/ ?>