<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('productos')->truncate();

        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Polera Nike',
            'precio' => '200',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 2,
            'nombre' => 'Camiseta Barcelona',
            'precio' => '250',
            'stock' => '5'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 3,
            'nombre' => 'Zapatillas Puma',
            'precio' => '600',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 4,
            'nombre' => 'Balon Beisball',
            'precio' => '20',
            'stock' => '30'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Trofeo de Tenis',
            'precio' => '200',
            'stock' => '10'
        ]);       
    }
}
