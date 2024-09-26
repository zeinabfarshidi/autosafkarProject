<!DOCTYPE html>
<html lang="en">
<head>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.head', [])->html();
} elseif ($_instance->childHasBeenRendered('MlqMEzK')) {
    $componentId = $_instance->getRenderedChildComponentId('MlqMEzK');
    $componentTag = $_instance->getRenderedChildComponentTagName('MlqMEzK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MlqMEzK');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.head', []);
    $html = $response->html();
    $_instance->logRenderedChild('MlqMEzK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</head>
<body>
<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.sidebar', [])->html();
} elseif ($_instance->childHasBeenRendered('MYiKB0R')) {
    $componentId = $_instance->getRenderedChildComponentId('MYiKB0R');
    $componentTag = $_instance->getRenderedChildComponentTagName('MYiKB0R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MYiKB0R');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.sidebar', []);
    $html = $response->html();
    $_instance->logRenderedChild('MYiKB0R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<div class="content">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.header', [])->html();
} elseif ($_instance->childHasBeenRendered('yuxKty0')) {
    $componentId = $_instance->getRenderedChildComponentId('yuxKty0');
    $componentTag = $_instance->getRenderedChildComponentTagName('yuxKty0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yuxKty0');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.header', []);
    $html = $response->html();
    $_instance->logRenderedChild('yuxKty0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo $__env->make('livewire.admin.dashboard.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e($slot); ?>

</div>
</body>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard.footer', [])->html();
} elseif ($_instance->childHasBeenRendered('yCaXR9j')) {
    $componentId = $_instance->getRenderedChildComponentId('yCaXR9j');
    $componentTag = $_instance->getRenderedChildComponentTagName('yCaXR9j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yCaXR9j');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard.footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('yCaXR9j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo e($scripts ?? ''); ?>

</html>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>