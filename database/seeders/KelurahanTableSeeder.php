<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KelurahanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelurahan')->delete();
        $kelurahan = [
            [
                "id" => 1,
                "nama" => "Tugu",
                "kecamatan" => "Cimanggis",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now(),
            ],
            [
                "id" => 2,
                "nama" => "Tugu",
                "kecamatan" => "Cimanggis",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now(),
            ],
            [
                "id" => 3,
                "nama" => "Tugu",
                "kecamatan" => "Cimanggis",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now(),
            ],
            [
                "id" => 4,
                "nama" => "Tugu",
                "kecamatan" => "Cimanggis",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now(),
            ],
            [
                "id" => 5,
                "nama" => "Tugu",
                "kecamatan" => "Cimanggis",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now(),
            ],
        ];
        DB::table('kelurahan')->insert($kelurahan);
    }
}
