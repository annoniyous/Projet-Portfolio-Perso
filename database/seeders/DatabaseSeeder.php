<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NavlinkSeeder::class,
            HeadtiltleSeeder::class,
            SecondtitleSeeder::class,
            SocialiconesSeeder::class,
            SectiontiltleSeeder::class,
        ]);
            
    }
}
