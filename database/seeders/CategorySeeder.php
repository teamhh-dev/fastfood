<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Factories\CategoryFactory;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\category::factory(5)->create();
        // CategoryFactory::factory
    }
}
