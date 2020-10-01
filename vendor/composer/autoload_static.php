<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a5e855940da6cddb8c7f5019ac30299
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'University\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'University\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a5e855940da6cddb8c7f5019ac30299::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a5e855940da6cddb8c7f5019ac30299::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
