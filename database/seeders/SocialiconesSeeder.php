<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialiconesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socialicones')->insert([
            ['href'=>"https://twitter.com/",
            'class'=>"twitter",
            'icone'=>"bx bxl-twitter"],
            ['href'=>"https://fr-fr.facebook.com/",
            'class'=>"facebook",
            'icone'=>"bx bxl-facebook"],
            ['href'=>"https://www.instagram.com/",
            'class'=>"instagram",
            'icone'=>"bx bxl-instagram"],
            ['href'=>"https://myaccount.google.com/profile",
            'class'=>"google-plus",
            'icone'=>"bx bxl-skype"],
            ['href'=>"https://www.linkedin.com/in/youssef-bouysantiman-63b4451aa/",
            'class'=>"linkedin",
            'icone'=>"bx bxl-linkedin"],
        ]);
    }
}
