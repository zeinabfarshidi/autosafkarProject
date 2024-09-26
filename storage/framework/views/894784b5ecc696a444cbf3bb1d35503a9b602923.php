<!doctype html>
<html lang="fa">
<head>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.head', [])->html();
} elseif ($_instance->childHasBeenRendered('7RbA4Fh')) {
    $componentId = $_instance->getRenderedChildComponentId('7RbA4Fh');
    $componentTag = $_instance->getRenderedChildComponentTagName('7RbA4Fh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7RbA4Fh');
} else {
    $response = \Livewire\Livewire::mount('home.head', []);
    $html = $response->html();
    $_instance->logRenderedChild('7RbA4Fh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</head>
<body>
<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.header', [])->html();
} elseif ($_instance->childHasBeenRendered('0hMGVsk')) {
    $componentId = $_instance->getRenderedChildComponentId('0hMGVsk');
    $componentTag = $_instance->getRenderedChildComponentTagName('0hMGVsk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0hMGVsk');
} else {
    $response = \Livewire\Livewire::mount('home.header', []);
    $html = $response->html();
    $_instance->logRenderedChild('0hMGVsk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo e($slot); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.footer', [])->html();
} elseif ($_instance->childHasBeenRendered('1NJL181')) {
    $componentId = $_instance->getRenderedChildComponentId('1NJL181');
    $componentTag = $_instance->getRenderedChildComponentTagName('1NJL181');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1NJL181');
} else {
    $response = \Livewire\Livewire::mount('home.footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('1NJL181', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo e($scripts ?? ''); ?>

</body>
</html>
<?php /**PATH D:\projects\aryatehran\autosafkar\project\resources\views/layouts/app.blade.php ENDPATH**/ ?>