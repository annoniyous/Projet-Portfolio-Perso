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
            // Home
            NavlinkSeeder::class,
            HeadtiltleSeeder::class,
            SecondtitleSeeder::class,
            SocialiconesSeeder::class,
            // About + all titles
            SectiontiltleSeeder::class,
            AboutdescriptionSeeder::class,
            AboutimgSeeder::class,
            AboutliSeeder::class,
            // Skills
            SkillSeeder::class,
            // Portfolio
            PortfolioliSeeder::class,
            PortfolioimgSeeder::class,
            ContacticoneSeeder::class,

        ]);
            
    }
}
