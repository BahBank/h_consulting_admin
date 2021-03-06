<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'firstName' => 'Bah',
            'lastName' => 'Mamadou',
            'email' => 'mafouzdiallo@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
            'phone' => '+224623684286',
            'status' => true
        ]);
    }
}
