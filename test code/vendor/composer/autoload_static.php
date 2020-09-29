<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86464ac763edd2968e298c04bf49527e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86464ac763edd2968e298c04bf49527e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86464ac763edd2968e298c04bf49527e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
