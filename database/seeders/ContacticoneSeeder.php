<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContacticoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacticones')->insert([
                ['classe'=>'address',
                'icone'=>'icofont-google-map',
                'nom'=>'Location:',
                'contenu'=>'A108 Adam Street, New York, NY 535022'],
                ['classe'=>'email',
                'icone'=>'icofont-envelope',
                'nom'=>'Email:',
                'contenu'=>'info@example.com'],
                ['classe'=>'phone',
                'icone'=>'icofont-phone',
                'nom'=>'Call:',
                'contenu'=>'+1 5589 55488 55s']
            ]);
    }
}
