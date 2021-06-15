<?php

namespace UsrNotFound\Ui;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class UiCommand extends Command
{
    protected $signature = 'usrnotfound:rilt-preset';

    protected $description = 'Front-end scaffolding for the application';

    public function handle(Filesystem $filesystem)
    {
        Presets\React::install();

        $this->info('React scaffolding installed successfully.');

        $this->installComposerDependency();

        $this->copyResources($filesystem,__DIR__ . '/Presets/stubs/resources/js', 'js');
        $this->copyResources($filesystem, __DIR__ . 'Presets/stubs/resources/css', 'js');


        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

    public function installComposerDependency()
    {
        (new Process(
            array_merge(['composer', 'require'], Package::COMPOSER_DEPENDENCY),
            base_path(),
            ['COMPOSER_MEMORY_LIMIT' => '-1'])
        )
            ->setTimeout(null)
            ->run(fn ($type, $output) => $this->output->write($output));
    }

    public function copyResources(Filesystem $filesystem, $path, $destination)
    {
        $filesystem->ensureDirectoryExists($destination);
        $filesystem->copyDirectory($path, resource_path($destination));
    }
}

//https://github.com/laravel/breeze/blob/1.x/src/Console/InstallCommand.php