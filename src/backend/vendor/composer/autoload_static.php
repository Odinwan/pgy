<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09aa927bb5ddbed4cef38012a391593b
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit09aa927bb5ddbed4cef38012a391593b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit09aa927bb5ddbed4cef38012a391593b::$classMap;

        }, null, ClassLoader::class);
    }
}