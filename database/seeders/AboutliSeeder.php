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
                'icone'=>'Birthday:',
                'li'=>' 1 May 1995',
            ],
            [ 
                'icone'=>'Website:',
                'li'=>' www.example.com',
            ],
            [ 
                'icone'=>'Phone:',
                'li'=>' +123 456 7890',
            ],
            [ 
                'icone'=>'City:',
                'li'=>' City : New York, USA',
            ],
            [ 
                'icone'=>'Age:',
                'li'=>' 30',
            ],
            [ 
                'icone'=>'Degree:',
                'li'=>' Master',
            ],
            [ 
                'icone'=>'PhEmailone:',
                'li'=>' email@example.com',
            ],
            [ 
                'icone'=>'Freelance:',
                'li'=>' Available',
            ],
            ]);
    }
}
