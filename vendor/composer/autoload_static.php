<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41e59db90fb26695004d40d8530a1afe
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Block\\FilmDisplay' => __DIR__ . '/../..' . '/app/Block/FilmDisplay.php',
        'App\\Controller\\ErrorController' => __DIR__ . '/../..' . '/app/Controller/ErrorController.php',
        'App\\Controller\\FilmsController' => __DIR__ . '/../..' . '/app/Controller/FilmsController.php',
        'App\\Helper\\FormBuilder' => __DIR__ . '/../..' . '/app/Helper/FormBuilder.php',
        'App\\Helper\\Helper' => __DIR__ . '/../..' . '/app/Helper/Helper.php',
        'App\\Model\\Age' => __DIR__ . '/../..' . '/app/Model/Age.php',
        'App\\Model\\Film' => __DIR__ . '/../..' . '/app/Model/Film.php',
        'App\\Model\\Hour' => __DIR__ . '/../..' . '/app/Model/Hour.php',
        'App\\Model\\Room' => __DIR__ . '/../..' . '/app/Model/Room.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/core/Controller.php',
        'Core\\Database' => __DIR__ . '/../..' . '/core/Database.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41e59db90fb26695004d40d8530a1afe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41e59db90fb26695004d40d8530a1afe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41e59db90fb26695004d40d8530a1afe::$classMap;

        }, null, ClassLoader::class);
    }
}