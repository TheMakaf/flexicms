<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plugins\\' => 8,
        ),
        'E' => 
        array (
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
        'A' => 
        array (
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plugins\\' => 
        array (
            0 => __DIR__ . '/../..' . '/content/plugins',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
