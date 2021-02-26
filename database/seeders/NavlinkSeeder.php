<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navlinks')->insert([

            [
            
            'icone'  =>  'bx bx-home',
            
            'span'  =>  'Home',
            
            'href'  =>  'hero'
            
            ],
            
            [
            
            'icone'  =>  'bx bx-user',
            
            'span'  =>  'About',
            
            'href'  =>  'about'
            
            ],
            
            [
            
            'icone'  =>  'bx bx-file-blank',
            
            'span'  =>  'Resume',
            
            'href'  =>  'resume'
            
            ],
            
            [
            
            'icone'  =>  'bx bx-book-content',
            
            'span'  =>  'Portfolio',
            
            'href'  =>  'portfolio'
            
            ],
            
            [
            
            'icone'  =>  'bx bx-server',
            
            'span'  =>  'Services',
            
            'href'  =>  'services'
            
            ],
            
            [
            
            'icone'  =>  'bx bx-envelope',
            
            'span'  =>  'Contact',
            
            'href'  =>  'contact'
            
            ],
            
            ]);
    }
}
