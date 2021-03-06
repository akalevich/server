<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitComments
{
    public static $firstCharsPsr4 = array (
        'O' => true,
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Comments\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\Comments\\Activity\\Filter' => __DIR__ . '/..' . '/../lib/Activity/Filter.php',
        'OCA\\Comments\\Activity\\Listener' => __DIR__ . '/..' . '/../lib/Activity/Listener.php',
        'OCA\\Comments\\Activity\\Provider' => __DIR__ . '/..' . '/../lib/Activity/Provider.php',
        'OCA\\Comments\\Activity\\Setting' => __DIR__ . '/..' . '/../lib/Activity/Setting.php',
        'OCA\\Comments\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Comments\\Collaboration\\CommentersSorter' => __DIR__ . '/..' . '/../lib/Collaboration/CommentersSorter.php',
        'OCA\\Comments\\Controller\\Notifications' => __DIR__ . '/..' . '/../lib/Controller/Notifications.php',
        'OCA\\Comments\\EventHandler' => __DIR__ . '/..' . '/../lib/EventHandler.php',
        'OCA\\Comments\\JSSettingsHelper' => __DIR__ . '/..' . '/../lib/JSSettingsHelper.php',
        'OCA\\Comments\\Notification\\Listener' => __DIR__ . '/..' . '/../lib/Notification/Listener.php',
        'OCA\\Comments\\Notification\\Notifier' => __DIR__ . '/..' . '/../lib/Notification/Notifier.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInitComments::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitComments::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitComments::$classMap;

        }, null, ClassLoader::class);
    }
}
