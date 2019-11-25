<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('facturas')->truncate();

        DB::table('facturas')->insert([
            'id_cliente' => 1,
            'id_pago' => 1
        ]);
        DB::table('facturas')->insert([
            'id_cliente' => 2,
            'id_pago' => 2
        ]);
        DB::table('facturas')->insert([
            'id_cliente' => 3,
            'id_pago' => 3
        ]);
        DB::table('facturas')->insert([
            'id_cliente' => 4,
            'id_pago' => 4
        ]);
        DB::table('facturas')->insert([
            'id_cliente' => 5,
            'id_pago' => 5
        ]);
    }
}
