<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cd9ab07b35811d8922182204748649a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Winnie\\LaravelQueryWatcher\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Winnie\\LaravelQueryWatcher\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cd9ab07b35811d8922182204748649a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cd9ab07b35811d8922182204748649a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cd9ab07b35811d8922182204748649a::$classMap;

        }, null, ClassLoader::class);
    }
}
