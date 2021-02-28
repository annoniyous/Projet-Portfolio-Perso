<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfoliolis')->insert([
            [   'data'=>'*',
                'class'=>'filter-active',
                'nom'=>'All'],
            [   'data'=>'.filter-app',
                'class'=>'',
                'nom'=>'App'],
            [   'data'=>'.filter-card',
                'class'=>'',
                'nom'=>'Card'],
            [   'data'=>'.filter-web',
                'class'=>'',
                'nom'=>'Web']
            ]);
    }
}
