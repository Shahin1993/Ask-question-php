<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f6b956e7b585f0f7989b1ba23709b1d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f6b956e7b585f0f7989b1ba23709b1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f6b956e7b585f0f7989b1ba23709b1d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
