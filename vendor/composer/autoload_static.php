<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09f155c2ff050c80a692bbba023c4fd0
{
    public static $files = array (
        '50228c9d0f371586aaddf8f2d18712c6' => __DIR__ . '/../..' . '/app/Functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'Lazer\\Test\\' => 11,
            'Lazer\\' => 6,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Lazer\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/greg0/lazer-database/tests/src',
        ),
        'Lazer\\' => 
        array (
            0 => __DIR__ . '/..' . '/greg0/lazer-database/src',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09f155c2ff050c80a692bbba023c4fd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09f155c2ff050c80a692bbba023c4fd0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
