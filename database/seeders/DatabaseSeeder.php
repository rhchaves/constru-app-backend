<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Seeders Aplicação
         */
        $this->call(AdminSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SellerSeeder::class);
    }
}
