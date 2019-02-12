<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef15a35715d487738126f7c738982b16
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef15a35715d487738126f7c738982b16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef15a35715d487738126f7c738982b16::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
