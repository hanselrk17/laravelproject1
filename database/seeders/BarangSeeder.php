<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_barang')->insert([
           "nama"=>"Mouse",
           "harga"=>100000,
            "quantity" => 10,
            "expired_time"=> "2023-01-01"
        ]);
    }
}
