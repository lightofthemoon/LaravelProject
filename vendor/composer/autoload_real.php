<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite01cbfe2b4d0ecba9d96c4d9ebad701d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite01cbfe2b4d0ecba9d96c4d9ebad701d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite01cbfe2b4d0ecba9d96c4d9ebad701d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite01cbfe2b4d0ecba9d96c4d9ebad701d::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInite01cbfe2b4d0ecba9d96c4d9ebad701d::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiree01cbfe2b4d0ecba9d96c4d9ebad701d($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiree01cbfe2b4d0ecba9d96c4d9ebad701d($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
