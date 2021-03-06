<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitSystemTags
{
    public static $firstCharsPsr4 = array (
        'O' => true,
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\SystemTags\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\SystemTags\\Activity\\Listener' => __DIR__ . '/..' . '/../lib/Activity/Listener.php',
        'OCA\\SystemTags\\Activity\\Provider' => __DIR__ . '/..' . '/../lib/Activity/Provider.php',
        'OCA\\SystemTags\\Activity\\Setting' => __DIR__ . '/..' . '/../lib/Activity/Setting.php',
        'OCA\\SystemTags\\Controller\\LastUsedController' => __DIR__ . '/..' . '/../lib/Controller/LastUsedController.php',
        'OCA\\SystemTags\\Settings\\Admin' => __DIR__ . '/..' . '/../lib/Settings/Admin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInitSystemTags::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitSystemTags::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitSystemTags::$classMap;

        }, null, ClassLoader::class);
    }
}
