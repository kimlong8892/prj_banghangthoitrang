<?php

use Illuminate\Database\Seeder;

class CustomerSeed extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 10; ++$i) {
            \Illuminate\Support\Facades\DB::table('customers')
                ->insertOrIgnore([
                    'email' => 'user' . $i . '@gmail.com',
                    'name' => 'user' . $i,
                    'password' => \Illuminate\Support\Facades\Hash::make('@Admin123'),
                    'phone' => '0939652148',
                    'address' => 'test' . $i
                ]);
        }
    }
}
