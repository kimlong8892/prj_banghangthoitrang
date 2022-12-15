<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admins')
            ->insert([
                'name' => 'admin default',
                'email' => 'admin@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('admin@gmail.com')
            ]);
    }
}
