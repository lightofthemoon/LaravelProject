<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['categoryName' => 'Web Development'],
            ['categoryName' => 'Mobile Development'],
            ['categoryName' => 'Data Science'],
            ['categoryName' => 'Cybersecurity'],
            ['categoryName' => 'Artificial Intelligence'],
        ];

        DB::table('category')->insert($categories);
    }
}
