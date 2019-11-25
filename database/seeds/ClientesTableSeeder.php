<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('clientes')->truncate();

        DB::table('clientes')->insert([
            'nombre' => 'Ricardo Julio',
            'apellido' => 'Ureña Irarte',
            'direccion' => 'Colombia 588',
            'fecha_nacimiento' => '1983-09-24',
            'telefono' => '72713711',
            'email' => 'ricardouiriarte@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Tatiana',
            'apellido' => 'Ponce Peñaranda',
            'direccion' => 'Colombia 588',
            'fecha_nacimiento' => '1982-02-05',
            'telefono' => '7552222',
            'email' => 'taty@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Thiago',
            'apellido' => 'Ureña Ponce',
            'direccion' => 'Colombia 588',
            'fecha_nacimiento' => '2012-02-08',
            'telefono' => '4522569',
            'email' => 'thiagou@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Matias',
            'apellido' => 'Ureña Ponce',
            'direccion' => 'Colombia 588',
            'fecha_nacimiento' => '2014-07-05',
            'telefono' => '452699',
            'email' => 'matias@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Jackeline',
            'apellido' => 'Velasquez Iporre',
            'direccion' => 'Av. heroinas y falsuri',
            'fecha_nacimiento' => '2018-01-01',
            'telefono' => '4596632',
            'email' => 'jvelazquez@gmail.com'
        ]);
    }
}
