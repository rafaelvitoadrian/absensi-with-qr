<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@absen.com',
            'role'=>'admin',
            'password'=>bcrypt('admin123'),
        ]);

        $operator = User::create([
            'name'=>'Operator 1',
            'email'=>'op1@absen.com',
            'role'=>'operator',
            'password'=>bcrypt('admin123'),
        ]);

        $operator = User::create([
            'name'=>'Operator 2',
            'email'=>'op2@absen.com',
            'role'=>'operator',
            'password'=>bcrypt('admin123'),
        ]);

        $operator = User::create([
            'name'=>'Operator 3',
            'email'=>'op3@absen.com',
            'role'=>'operator',
            'password'=>bcrypt('admin123'),
        ]);

    }
}
