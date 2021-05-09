<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset_url('css/index.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const API_URL = '<?php echo e(site_url('api')); ?>';
    </script>
    <script src="<?php echo e(asset_url('js/index.js')); ?>"></script>
</head>
<body>

<main>

    <?php if($msg = cookie('msg')): ?>
        <div class="msg">
            <?php echo $msg; ?>

        </div>
        <script>
            setTimeout(() => document.querySelector('.msg').style.display = 'none', 1500);
        </script>
    <?php endif; ?>

    <?php if (isset($errors['error'])): ?><div class="error-msg"><?=$errors['error'][0]?></div><?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</main>

</body>
</html><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/layout.blade.php ENDPATH**/ ?>