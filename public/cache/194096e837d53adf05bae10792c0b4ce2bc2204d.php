<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        .has-error {
            border: 2px solid red;
        }
        .error-msg {
            background: orangered;
            color: #fff;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

</body>
</html><?php /**PATH /Applications/MAMP/htdocs/boilerplate/public/views/layout.blade.php ENDPATH**/ ?>