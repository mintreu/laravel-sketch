<?php

namespace Mintreu\LaravelSketch\Commands;

use Illuminate\Console\Command;

class LaravelSketchCommand extends Command
{
    public $signature = 'laravel-sketch';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
