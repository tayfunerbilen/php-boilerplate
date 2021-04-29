<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <ul>
            <li>
                <input type="text" value="<?=$_posts['username'] ?? null?>" class="<?php if (isset($errors['username'])): ?>has-error<?php endif; ?>" placeholder="Kullanıcı adı" name="username">
                <?php if (isset($errors['username'])): ?><div class="error-msg"><?=$errors['username'][0]?></div><?php endif; ?>
            </li>
            <li>
                <input type="password" placeholder="Parola" name="password">
                <?php if (isset($errors['password'])): ?><div class="error-msg"><?=$errors['password'][0]?></div><?php endif; ?>
            </li>
            <li>
                <input type="password" placeholder="Parola (Tekrar)" name="password_again">
                <?php if (isset($errors['password_again'])): ?><div class="error-msg"><?=$errors['password_again'][0]?></div><?php endif; ?>
            </li>
            <li>
                <button type="submit">Gönder</button>
            </li>
        </ul>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/home.blade.php ENDPATH**/ ?>