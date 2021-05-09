<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>

    <form action="" method="post" enctype="multipart/form-data">
        <h3>Avatar</h3>
        <input type="file" name="avatar"> <br>
        <h3>Avatar 2</h3>
        <input type="file" name="avatar2"> <br>
        <button type="submit">Kaydet</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/edit-profile.blade.php ENDPATH**/ ?>