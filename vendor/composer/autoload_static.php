<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee0061722ca77f6685fe249ab5a02ded
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee0061722ca77f6685fe249ab5a02ded::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee0061722ca77f6685fe249ab5a02ded::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee0061722ca77f6685fe249ab5a02ded::$classMap;

        }, null, ClassLoader::class);
    }
}