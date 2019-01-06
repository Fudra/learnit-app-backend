<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
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
        $quizzes = factory(\App\Models\Quiz::class, 10)->create();

        foreach ($quizzes as $quiz) {
            $random = $categories->random(random_int(1, $categories->count()));
            $quiz->categories()->sync($random);
        }
    }
}
