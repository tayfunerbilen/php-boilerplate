<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>

    <form action="" method="post">

        <?php if (isset($errors['auth'])): ?><div class="error-msg"><?=$errors['auth'][0]?></div><?php endif; ?>

        <ul>
            <li>
                <input type="text" class="<?php if (isset($errors['name'])): ?>has-error<?php endif; ?>" placeholder="Kullanıcı adı" name="name">
                <?php if (isset($errors['name'])): ?><div class="error-msg"><?=$errors['name'][0]?></div><?php endif; ?>
            </li>
            <li>
                <button type="submit">Giriş yap</button>
            </li>
        </ul>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/login.blade.php ENDPATH**/ ?>