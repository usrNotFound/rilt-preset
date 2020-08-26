<?php

namespace UsrNotFound\Ui\Presets;

class React extends Preset
{
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updatePackages(false);
        static::updateWebpackConfiguration();
        static::updateBootstrapping();
        static::updateComponent();
        static::removeNodeModules();
        static::updateTailwindConfig();
        static::updateScss();
        static::updateBableRc();
    }

    protected static function updatePackageArray(array $packages, $configurationKey)
    {
        return array_merge(self::packages()[$configurationKey], $packages);
    }

    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function updateComponent()
    {
        copy(__DIR__ . '/stubs/Example.js', resource_path('js/components/Example.js'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));
    }

    protected static function updateTailwindConfig()
    {
        copy(__DIR__ . '/stubs/tailwind.config.js', base_path('tailwind.config.js'));
    }

    protected static function updateScss()
    {
        copy(__DIR__ . '/stubs/app.scss', resource_path('sass/app.scss'));
    }

    protected static function updateBableRc()
    {
        copy(__DIR__ . '/stubs/.babelrc', base_path('.babelrc'));
    }

    public static function packages()
    {
        return [
            'devDependencies' => [
                '@babel/plugin-proposal-optional-chaining' => '^7.9.0',
                '@babel/plugin-syntax-dynamic-import' => '^7.8.3',
                '@babel/preset-react' => '^7.0.0',
                'react' => '^16.2.0',
                'react-dom' => '^16.2.0',
                'cross-env' => '^7.0',
                'tailwindcss' => '^1.4',
            ],
            'dependencies' => [
                '@inertiajs/inertia' => '^0.2.1',
                '@inertiajs/inertia-react' => '^0.2.0'
            ]
        ];
    }
}
