<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Nnjeim\World\Actions\SeedAction;

class WorldSeeder extends Seeder
{
    public function run()
    {
        ini_set('memory_limit', '-1');
        $this->call([
            SeedAction::class,
        ]);
    }
}
