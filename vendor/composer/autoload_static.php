<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e1b444f912f5a9aa6b7f0911f51ad55
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vince\\RecordsApp\\' => 17,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vince\\RecordsApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e1b444f912f5a9aa6b7f0911f51ad55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e1b444f912f5a9aa6b7f0911f51ad55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e1b444f912f5a9aa6b7f0911f51ad55::$classMap;

        }, null, ClassLoader::class);
    }
}