<ul>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a target="_blank" href="<?php echo e($item['web_pages'][0]); ?>"><?php echo e($item['name']); ?></a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\PEMRO WEB\laravel\example-app\resources\views/bebek.blade.php ENDPATH**/ ?>