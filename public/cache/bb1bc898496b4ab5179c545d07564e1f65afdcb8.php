<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>

    <?php if(auth()->guard()->check()): ?>
        <h3>
            Hoşgeldin, <?php echo e(auth()->getName()); ?>

            <a href="http://localhost/boilerplate/logout">[Çıkış yap]</a>
        </h3>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <h3>
            Hoşgeldin ziyaretçi!
            <a href="http://localhost/boilerplate/login">[Giriş yap]</a>
            <a href="http://localhost/boilerplate/register">[Kayıt ol]</a>
        </h3>
    <?php endif; ?>

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

    <form action="" method="post" enctype="multipart/form-data">
        <textarea name="content" cols="30" class="<?php if (isset($errors['content'])): ?>has-error<?php endif; ?>" rows="5"></textarea> <br>
        <?php if (isset($errors['content'])): ?><div class="error-msg"><?=$errors['content'][0]?></div><?php endif; ?> <br>
        <input type="file" name="image" class="<?php if (isset($errors['image'])): ?>has-error<?php endif; ?>"> <br>
        <?php if (isset($errors['image'])): ?><div class="error-msg"><?=$errors['image'][0]?></div><?php endif; ?> <br>
        <button type="submit">Kaydet</button>
    </form>

    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>

                <?php if($post->image): ?>
                    <div>
                        <img src="http://localhost/boilerplate/upload/posts/<?php echo e($post->image); ?>" alt="">
                    </div>
                <?php endif; ?>

                #<?php echo e($post->id); ?> <br>
                <?php echo e($post->content); ?> <br>
                Ekleyen: <?php echo e($post->user->name); ?> <br>
                Eklenme Tarihi: <?=timeAgo($post->created_at)?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/home.blade.php ENDPATH**/ ?>