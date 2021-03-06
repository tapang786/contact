<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2168452361f33868ed3f8c31a79043f1
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inditech\\Contact\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inditech\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2168452361f33868ed3f8c31a79043f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2168452361f33868ed3f8c31a79043f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2168452361f33868ed3f8c31a79043f1::$classMap;

        }, null, ClassLoader::class);
    }
}
