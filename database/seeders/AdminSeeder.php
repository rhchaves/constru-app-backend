<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admins = array(
        //     [
        //         'name' => 'Rodolfo',
        //         'cpf' => '123.123.123-12',
        //         'email' => 'rodolfo@fatec.com',
        //         'password' => '123',
        //     ], [
        //         'name' => 'Rodolfo',
        //         'cpf' => '123.123.123-12',
        //         'email' => 'rodolfo@fatec.com',
        //         'password' => '123',
        //     ], [
        //         'name' => 'Rodolfo',
        //         'cpf' => '123.123.123-12',
        //         'email' => 'rodolfo@fatec.com',
        //         'password' => '123',
        //     ],
        // );

        // foreach ($admins as $admin) {
        //     Admin::firstOrCreate(
        //         ['email' => $admin['email']],
        //         $admin
        //     );
        // }

        Admin::create([
            'name' => 'Rodolfo',
            'cpf' => '111.111.111-11',
            'email' => 'rodolfo@fatec.com',
            'password' => '123',
        ]);

        Admin::create([
            'name' => 'Vinicius',
            'cpf' => '222.222.222-22',
            'email' => 'vinicius@fatec.com',
            'password' => '123',
        ]);

        Admin::create([
            'name' => 'Elcio',
            'cpf' => '333.333.333-33',
            'email' => 'elcio@fatec.com',
            'password' => '123',
        ]);
    }
}
