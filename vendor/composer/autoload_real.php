<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36cc8f2093d14d6068d27a3e701168d0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit36cc8f2093d14d6068d27a3e701168d0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36cc8f2093d14d6068d27a3e701168d0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36cc8f2093d14d6068d27a3e701168d0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
