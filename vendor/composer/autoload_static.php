<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit237fac0934ef2af5c38dc2b053531d0d
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit237fac0934ef2af5c38dc2b053531d0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit237fac0934ef2af5c38dc2b053531d0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit237fac0934ef2af5c38dc2b053531d0d::$classMap;

        }, null, ClassLoader::class);
    }
}
