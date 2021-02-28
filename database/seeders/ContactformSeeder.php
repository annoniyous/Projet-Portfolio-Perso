<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactforms')->insert([
            ['type'=>'text',
            'name'=>'name',
            'ida'=>'name',
            'placeholder'=>'Your Name',
            'datarule'=>'minlen:4',
            'datamsg'=>'Please enter at least 4 chars'],
            ['type'=>'email',
            'name'=>'email',
            'ida'=>'email',
            'placeholder'=>'Your Email',
            'datarule'=>'email',
            'datamsg'=>'Please enter a valid email',]
            ]);
    }
}
