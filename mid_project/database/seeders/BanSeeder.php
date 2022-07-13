<?php

namespace Database\Seeders;
use App\Models\Ban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ban::factory()->create([
            'u_id' => 1,
            'b_reason' => 'nothing',
            'b_duration' => NULL,
            'created_at' => NULL,
            'updated_at' => Null
        ]);
    }
}
