<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //role untuk admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@awanlab.com',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        //Role untuk customer
        $customer = User::create([
            'name' => 'customer',
            'email' => 'customer',
            'password' => bcrypt('customer')
        ]);

        $customer->assignRole('customer');


    }
}
