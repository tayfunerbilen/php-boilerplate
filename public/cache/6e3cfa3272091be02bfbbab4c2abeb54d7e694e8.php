<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <input type="text" class="<?php if (isset($errors['name'])): ?>has-error<?php endif; ?>" value="<?=$_posts['name'] ?? null?>" name="name" placeholder="Kullanıcı adı"> <br>
        <?php if (isset($errors['name'])): ?><div class="error-msg"><?=$errors['name'][0]?></div><?php endif; ?>
        <input type="password" name="password" class="<?php if (isset($errors['password'])): ?>has-error<?php endif; ?>" placeholder="Şifre"> <br>
        <?php if (isset($errors['password'])): ?><div class="error-msg"><?=$errors['password'][0]?></div><?php endif; ?>
        <button type="submit">Giriş yap</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/auth/login.blade.php ENDPATH**/ ?>