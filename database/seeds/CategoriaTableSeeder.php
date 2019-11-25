<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('categorias')->truncate();

        DB::table('categorias')->insert([
            'nombre' => 'Camisetas',
            'descripcion' => 'Poleras dri-fit'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Poleras de Futbol',
            'descripcion' => 'Calidad A'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Deportivos',
            'descripcion' => 'Zapatillas Deportivas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Balones',
            'descripcion' => 'Balones para varios deportes'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Trofeos',
            'descripcion' => 'Trofeos para diferentes deportes'
        ]);
    }
}
