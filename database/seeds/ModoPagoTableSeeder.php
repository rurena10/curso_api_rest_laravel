<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModoPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('modo_pagos')->truncate();

        DB::table('modo_pagos')->insert([
            'nombre' => 'Contado',
            'descripcion' => 'Pago al contado'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Credito',
            'descripcion' => 'Pago a 10 cuotas'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Deposito Bancario',
            'descripcion' => 'Pago por via deposito bancario'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Paypal',
            'descripcion' => 'Pago por internet'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Pago por Qr',
            'descripcion' => 'Pago por codigo Qr'
        ]);
    }
}
