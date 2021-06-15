<?php

namespace UsrNotFound\Ui\Presets;

use UsrNotFound\Ui\Package;

class React extends Preset
{
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updatePackages(false);
        static::updateWebpackConfiguration();
        static::removeNodeModules();
        static::updateTailwindConfig();
        static::updateBableRc();
    }

    protected static function updatePackageArray(array $packages, $configurationKey)
    {
        return array_merge(self::dependencies()[$configurationKey], $packages);
    }

    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }


    protected static function updateTailwindConfig()
    {
        copy(__DIR__ . '/stubs/tailwind.config.js', base_path('tailwind.config.js'));
    }

    protected static function updateBableRc()
    {
        copy(__DIR__ . '/stubs/.babelrc', base_path('.babelrc'));
    }

    public static function dependencies()
    {
        return [
            'devDependencies' => Package::NPM_DEV_DEPENDENCY,
            'dependencies' => Package::NPM_DEPENDENCY
        ];
    }
}
