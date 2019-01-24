<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    protected $categories = [
        'Python',
        'Beginners',
        'Java',
        'Databases',
        'JavaScript',
        'Intermediate',
        'Framework',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
