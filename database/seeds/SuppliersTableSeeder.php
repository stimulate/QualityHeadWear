<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            ['name' => "WoolPress",'phoneNumber' => "09-2449955", 'email' => "admin@woolpress.co.nz"],
            ['name' => "IceBreaker",
                'phoneNumber' => "05-22429953", 'email'=>"admin@icebreaker.co.nz"],
            ['name' => "Kathmandu",
                'phoneNumber' => "06-1429953", 'email'=>"admin@kathmandu.co.nz"]
        ]);
    }
}
