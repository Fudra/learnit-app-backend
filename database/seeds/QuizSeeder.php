<?php

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $categories = \App\Models\Category::get();
        $quizes = factory(\App\Models\Quiz::class, 10)->create();

        foreach ($quizes as $quiz) {
            $random = $categories->random(random_int(1, $categories->count()));
            $quiz->categories()->sync($random);
        }
    }
}
