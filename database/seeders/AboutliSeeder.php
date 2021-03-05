<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutlis')->insert([
            [ 
                'icone'=>'Date de naissance:',
                'li'=>' 23 Décembre',
            ],
            [ 
                'icone'=>'Website:',
                'li'=>' www.AllCryptoGram.com',
            ],
            [ 
                'icone'=>'Téléphone:',
                'li'=>' +32.48.88.884.674',
            ],
            [ 
                'icone'=>'Ville:',
                'li'=>' City : Bruxelles, Belgique',
            ],
            [ 
                'icone'=>'Age:',
                'li'=>' 26 ans',
            ],
            [ 
                'icone'=>'Diplôme:',
                'li'=>' CESS',
            ],
            [ 
                'icone'=>'PhEmailone:',
                'li'=>' email@example.com',
            ],
            [ 
                'icone'=>'Freelance:',
                'li'=>' Disponible',
            ],
            ]);
    }
}
