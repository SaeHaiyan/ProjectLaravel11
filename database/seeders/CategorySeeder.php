<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'Machine-Learning',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Network Security',
            'slug' => 'Network-Security',
            'color' => 'blue'
        ]);
    }
}
