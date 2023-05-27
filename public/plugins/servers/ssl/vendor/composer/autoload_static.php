<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e099ca2beb44b2dc4a27feb841cc0e3
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'server\\ssl\\controller\\' => 22,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'Q' => 
        array (
            'QuantumCA\\Sdk\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'server\\ssl\\controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'QuantumCA\\Sdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/quantumca/sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e099ca2beb44b2dc4a27feb841cc0e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e099ca2beb44b2dc4a27feb841cc0e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e099ca2beb44b2dc4a27feb841cc0e3::$classMap;

        }, null, ClassLoader::class);
    }
}
