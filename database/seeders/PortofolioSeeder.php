<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
                'title'=>'Our Project',
                'description'=>'Project Kami'
            ];
        DB::table('portofolios')->insert($data);
    }
}
