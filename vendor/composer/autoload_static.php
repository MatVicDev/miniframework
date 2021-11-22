<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef201baa166e4b77502cd16701555700
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef201baa166e4b77502cd16701555700::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef201baa166e4b77502cd16701555700::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef201baa166e4b77502cd16701555700::$classMap;

        }, null, ClassLoader::class);
    }
}
