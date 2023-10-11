<?php

namespace Database\Seeders;

use App\Models\pemain_models;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemain_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pemain_models::factory(10)->create();
    }
}
