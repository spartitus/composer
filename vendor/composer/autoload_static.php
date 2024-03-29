<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6770b561ebf4b2184ef84dbc0f5307f9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6770b561ebf4b2184ef84dbc0f5307f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6770b561ebf4b2184ef84dbc0f5307f9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6770b561ebf4b2184ef84dbc0f5307f9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
