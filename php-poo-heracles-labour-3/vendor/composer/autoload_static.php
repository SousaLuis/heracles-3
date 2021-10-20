<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f3b7be1b206ffe5ee123853d90011d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f3b7be1b206ffe5ee123853d90011d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f3b7be1b206ffe5ee123853d90011d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78f3b7be1b206ffe5ee123853d90011d::$classMap;

        }, null, ClassLoader::class);
    }
}
