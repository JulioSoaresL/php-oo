<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39adc0f9871929fe379870c942f66299
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit39adc0f9871929fe379870c942f66299::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39adc0f9871929fe379870c942f66299::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39adc0f9871929fe379870c942f66299::$classMap;

        }, null, ClassLoader::class);
    }
}