<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('detalles')->truncate();
        
        DB::table('detalles')->insert([
            'id_factura' => 1,
            'id_producto' => 1,
            'cantidad' => 2,
            'precio' => 400
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 2,
            'id_producto' => 2,
            'cantidad' => 1,
            'precio' => 250
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 3,
            'id_producto' => 1,
            'cantidad' => 2,
            'precio' => 400
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 4,
            'id_producto' => 3,
            'cantidad' => 1,
            'precio' => 600
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 5,
            'id_producto' => 4,
            'cantidad' => 4,
            'precio' => 80
        ]);        
    }
}
