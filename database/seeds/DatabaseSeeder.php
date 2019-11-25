<?php

use Illuminate\Database\Seeder;
//use database\seeds\ClientesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //dd('ClientesTableSeeder');
        // $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ModoPagoTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(DetalleTableSeeder::class);
    }
}
