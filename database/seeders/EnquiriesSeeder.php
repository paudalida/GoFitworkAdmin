<?php

namespace Database\Seeders;

use App\Models\Enquiries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnquiriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enquiries::factory()->count(20)->create();
    }
}
