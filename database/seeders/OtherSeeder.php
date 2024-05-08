<?php

namespace Database\Seeders;

use App\Models\OtherDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OtherDetail::factory()->count(200)->create();
    }
}
