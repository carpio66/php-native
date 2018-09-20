<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4dc3e4b9406868d0d1d472a8e97a6a00
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'clases\\Dom' => __DIR__ . '/../..' . '/clases/dom.php',
        'clases\\Ferreteria' => __DIR__ . '/../..' . '/clases/ferreteria.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4dc3e4b9406868d0d1d472a8e97a6a00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4dc3e4b9406868d0d1d472a8e97a6a00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4dc3e4b9406868d0d1d472a8e97a6a00::$classMap;

        }, null, ClassLoader::class);
    }
}
