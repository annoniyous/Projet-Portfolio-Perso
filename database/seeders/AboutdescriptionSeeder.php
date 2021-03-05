<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutdescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutdescriptions')->insert([
            [
                'h3'=>'Web Developer/Marketer & Auto-entrepreneur',
                'p1'=>" Junior web developper, je suis égalemnt co-fondateur d'une jeune start-up nomée << AllCryptoGram >> ",
                'p2'=>'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.'
            ],
           
            ]);
      
    }
}
