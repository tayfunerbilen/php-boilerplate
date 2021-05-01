<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>
    <form style="display: none" action="" method="post">
        <ul>
            <li>
                <input type="text" value="<?=$_posts['username'] ?? null?>" class="<?php if (isset($errors['username'])): ?>has-error<?php endif; ?>"
                       placeholder="Kullanıcı adı" name="username">
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

    <form action="" method="post">
        <textarea name="content" cols="30" class="<?php if (isset($errors['content'])): ?>has-error<?php endif; ?>" rows="5"></textarea> <br>
        <?php if (isset($errors['content'])): ?><div class="error-msg"><?=$errors['content'][0]?></div><?php endif; ?>
        <button type="submit">Kaydet</button>
    </form>

    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                #<?php echo e($post->id); ?> <br>
                <?php echo e($post->content); ?> <br>
                Ekleyen: <?php echo e($post->user->name); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/home.blade.php ENDPATH**/ ?>