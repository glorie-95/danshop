<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f4d99042cc8a9f359a790f9edd45fe2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\FacetedSearch\\Tests\\' => 38,
            'PrestaShop\\Module\\FacetedSearch\\Controller\\' => 43,
            'PrestaShop\\Module\\FacetedSearch\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\FacetedSearch\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/php/FacetedSearch',
        ),
        'PrestaShop\\Module\\FacetedSearch\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
        'PrestaShop\\Module\\FacetedSearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Ps_Facetedsearch' => __DIR__ . '/../..' . '/ps_facetedsearch.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f4d99042cc8a9f359a790f9edd45fe2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f4d99042cc8a9f359a790f9edd45fe2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6f4d99042cc8a9f359a790f9edd45fe2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6f4d99042cc8a9f359a790f9edd45fe2::$classMap;

        }, null, ClassLoader::class);
    }
}
