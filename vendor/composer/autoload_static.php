<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit793f5669469cfad83f2974f2c61b0515
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'mecanica\\MovimentoUniforme' => __DIR__ . '/../..' . '/classes/mecanica/Deslocamento.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit793f5669469cfad83f2974f2c61b0515::$classMap;

        }, null, ClassLoader::class);
    }
}