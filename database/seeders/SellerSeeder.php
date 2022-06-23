<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Seller::factory()->count(20)->create();
    }
}
