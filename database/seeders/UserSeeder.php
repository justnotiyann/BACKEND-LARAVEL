<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                "nim" => '41215307',
                "nama" => 'Muhammad Fitrian',
                "gender" => 'Laki-laki',
                "jurusan" => 'Teknik Informatika',
            ]
        ]);
    }
}