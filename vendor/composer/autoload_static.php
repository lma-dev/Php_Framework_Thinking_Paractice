<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedb71ad53e61d394ebf3e1835396fd88
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitedb71ad53e61d394ebf3e1835396fd88' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitedb71ad53e61d394ebf3e1835396fd88' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitedb71ad53e61d394ebf3e1835396fd88::$classMap;

        }, null, ClassLoader::class);
    }
}
