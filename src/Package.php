<?php

namespace UsrNotFound\Ui;

interface Package
{
    public const NPM_DEV_DEPENDENCY = [
        'autoprefixer' => '^10.2.4',
        'babel-jest' => '^26.6.3',
        '@babel/plugin-proposal-optional-chaining' => '^7.9.0',
        '@babel/plugin-syntax-dynamic-import' => '^7.8.3',
        '@babel/preset-react' => '^7.13.13',
        'cross-env' => '^7.0',
        '@headlessui/react' => '^1.2.0',
        '@inertiajs/inertia' => '^0.9.0',
        '@inertiajs/inertia-react' => '^0.6.0',
        '@inertiajs/progress' => '^0.2.4',
        'jest' => '^26.6.3',
        '@tailwindcss/jit' => '^0.1.18',
        '@testing-library/jest-dom' => '^5.11.10',
        'postcss' => '^8.2.13',
        'postcss-import' => '^14.0.1',
        'tailwindcss' => '^2.1.2',
        'react' => '^17.0.2',
        'react-dom' => '^17.0.2',
    ];

    public const NPM_DEPENDENCY = [];

    public const COMPOSER_DEPENDENCY = [
        'inertiajs/inertia-laravel:^0.4.2'
    ];
}