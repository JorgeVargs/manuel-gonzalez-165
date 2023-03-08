<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf252bd91bdd3430f3e566afa37574cc3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf252bd91bdd3430f3e566afa37574cc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf252bd91bdd3430f3e566afa37574cc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf252bd91bdd3430f3e566afa37574cc3::$classMap;

        }, null, ClassLoader::class);
    }
}