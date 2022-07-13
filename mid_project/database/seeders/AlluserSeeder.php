<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alluser;
class AlluserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alluser::factory()->create([
         'id' => 1,
          'name' => 'Imon Faysal',
          'email' => 'emonf666@gmail.com',
          'phone' => '1959634446',
          'nid' => '987654678',
          'address' => 'Dhaka',
          'type' => 'admin',
          'status' => 'active',
          'password' => 'imon1234',
          'created_at' => NULL,
          'updated_at' => NULL,
    ]
);
    }
}
