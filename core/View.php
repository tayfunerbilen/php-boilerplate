<?php

namespace Core;

use Jenssegers\Blade\Blade;
use Valitron\Validator;

class View
{

    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function show($view, $data)
    {
        $blade = new Blade(dirname(__DIR__) . '/public/views', dirname(__DIR__) . '/public/cache');
        $blade->share('errors', $this->validator->errors());
        $blade->share('_posts', $this->validator->data());

        $blade->directive('hasError', function($name){
            return '<?php if (isset($errors[' . $name . '])): ?>has-error<?php endif; ?>';
        });

        $blade->directive('getError', function($name){
            return '<?php if (isset($errors[' . $name . '])): ?><div class="error-msg"><?=$errors[' . $name . '][0]?></div><?php endif; ?>';
        });

        $blade->directive('getData', function($name){
            return '<?=$_posts[' . $name . '] ?? null?>';
        });

        return $blade->render($view, $data);
    }

}