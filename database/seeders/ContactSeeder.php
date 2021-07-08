<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
               'title'=>'Project Kelompok Pekerja Malam',
               'description'=>'Disini saya mengerjakan proyek sampai malam',
               'email'=>'kelompokPWL@gmail.com',
               'phones'=>'0822331999222'
            ];
        DB::table('contacts')->insert($data);
    }   
}
