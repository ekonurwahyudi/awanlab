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
        //role untuk super admin
        $superadmin = User::create([
            'name' => 'superadmi',
            'email' => 'superadmin@awanlab.com',
            'password' => bcrypt('superadmin')
        ]);

        $superadmin->assignRole('superadmin');

        //Role untuk customer
        $customer = User::create([
            'name' => 'customer',
            'email' => 'customer',
            'password' => bcrypt('customer')
        ]);

        $customer->assignRole('customer');

        //Role untuk CS
        $cs = User::create([
            'name' => 'cs',
            'email' => 'cs@awanlab.com',
            'password' => bcrypt('cs')
        ]);

        $cs->assignRole('cs');

        //Role untuk Koordinator Teknik
        $kortek = User::create([
            'name' => 'kortek',
            'email' => 'kortek@awanlab.com',
            'password' => bcrypt('kortek')
        ]);

        $kortek->assignRole('kortek');

        //Role untuk Teknisi
        $teknisi = User::create([
            'name' => 'teknisi',
            'email' => 'teknisi@awanlab.com',
            'password' => bcrypt('teknisi')
        ]);

        $teknisi->assignRole('teknisi');

        //Role untuk admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@awanlab.com',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

    }
}
