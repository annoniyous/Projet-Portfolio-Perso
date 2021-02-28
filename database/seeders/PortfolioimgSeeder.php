<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioimgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolioimgs')->insert([
            [   'src'=>'/img/portfolio/portfolio-1.jpg',
                'name'=>'App 1',
                'p'=>'App',
                'href'=>'asset/img/portfolio/portfolio-1.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-app'],
                [   'src'=>'/img/portfolio/portfolio-2.jpg',
                'name'=>'Web 3',
                'p'=>'Web',
                'href'=>'asset/img/portfolio/portfolio-2.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-web'],
                [   'src'=>'/img/portfolio/portfolio-3.jpg',
                'name'=>'App 2',
                'p'=>'App',
                'href'=>'asset/img/portfolio/portfolio-3.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-app'],
                [   'src'=>'/img/portfolio/portfolio-4.jpg',
                'name'=>'Card 2',
                'p'=>'Card',
                'href'=>'asset/img/portfolio/portfolio-4.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-card'],
                [   'src'=>'/img/portfolio/portfolio-5.jpg',
                'name'=>'Web 2',
                'p'=>'Web',
                'href'=>'asset/img/portfolio/portfolio-5.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-web'],
                [   'src'=>'/img/portfolio/portfolio-6.jpg',
                'name'=>'App 3',
                'p'=>'App',
                'href'=>'asset/img/portfolio/portfolio-6.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-app'],
                [   'src'=>'/img/portfolio/portfolio-7.jpg',
                'name'=>'Card 1',
                'p'=>'Card',
                'href'=>'asset/img/portfolio/portfolio-7.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-card'],
                [   'src'=>'/img/portfolio/portfolio-8.jpg',
                'name'=>'Card 3',
                'p'=>'Card',
                'href'=>'asset/img/portfolio/portfolio-8.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-card'],
                [   'src'=>'/img/portfolio/portfolio-9.jpg',
                'name'=>'Web 3',
                'p'=>'Web',
                'href'=>'asset/img/portfolio/portfolio-9.jpg',
                'filter'=>'col-lg-4 col-md-6 portfolio-item filter-web']
           
            ]);
    }
}
