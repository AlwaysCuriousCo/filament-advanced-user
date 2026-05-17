<?php

namespace AlwaysCurious\FilamentAdvancedUser\Commands;

use Illuminate\Console\Command;

class FilamentAdvancedUserCommand extends Command
{
    public $signature = 'filament-advanced-user';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
