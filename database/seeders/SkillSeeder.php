<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        [   'nom'=>'HTML ',
            'pourcent'=>'100%',
            'airav'=> 100,
            'airavm'=> 100],

            [   'nom'=>'CSS ',
            'pourcent'=>'80%',
            'airav'=> 100,
            'airavm'=> 100 ],

            [   'nom'=>'JavaScript ',
            'pourcent'=>'75%' ,
            'airav'=>75,
            'airavm'=>75],

            [   'nom'=>'PHP ',
            'pourcent'=>'80%',
            'airav'=>80,
            'airavm'=>80],

            [   'nom'=>'WordPress/CMS ',
            'pourcent'=>'50%',
            'airav'=>50,
            'airavm'=>50],

            [   'nom'=>'Photoshop ',
            'pourcent'=>'55%',
            'airav'=>55,
            'airavm'=>55 ]
        ]);
    }
}
