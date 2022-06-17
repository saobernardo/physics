<?php
spl_autoload_register(function($class){
    $baseDir[] = [
        __DIR__."/Mecanica"
    ];

    foreach($baseDir as $base){
        $file = $base.str_replace('\\', '/', $class).'.php';

        if(file_exists($file)){
            require $file;
        }
    }
});