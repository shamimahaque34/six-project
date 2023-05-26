<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd29b25f453fcf86a22c06b4df4a46d15
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd29b25f453fcf86a22c06b4df4a46d15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd29b25f453fcf86a22c06b4df4a46d15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd29b25f453fcf86a22c06b4df4a46d15::$classMap;

        }, null, ClassLoader::class);
    }
}