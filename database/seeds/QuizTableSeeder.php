<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{

    protected $quizzes = [
        [
            'name' => 'Python Basics',
            'description' => 'This is a quiz that will teach you some of the Python basics. It is developed for absolute Python beginners, so don\'t be shy if you have no Python experience yet. You should have some basic knowledge about programming, though. Otherwise it will take you a little longer to complete the quiz. The quiz will not take too long and is perfect to get a brief overview over Python.',
            'categories' => [1, 2],
        ],
        [
            'name' => 'Java Basics',
            'description' => 'This is a quiz that will teach you some of the Java basics. It is developed for absolute Java beginners, so don\'t be shy if you have no Java experience yet. You should have some basic knowledge about programming, though. Otherwise it will take you a little longer to complete the quiz. The quiz will not take too long and is perfect to get a brief overview over Java.',
            'categories' => [2, 3],
        ],
        [
            'name' => 'Databases for Dummys',
            'description' => 'This is a quiz in which you can learn some basic things about Databases. You don\'t have to be experienced with databases at all, just go ahead and click through the questions that we posed.',
            'categories' => [2, 4],
        ],
        [
            'name' => 'Into Python',
            'description' => 'You already know some things about Python? Well... Let\'s dive in deeper into the material and see how much you really know - or what there is to learn for you. You should have been able to finish the Python Basics quiz before you start this one.',
            'categories' => [1, 6],
        ],
        [
            'name' => 'VueJS quick start',
            'description' => 'This is an introduction quiz to VueJS. If you want to build a small VueJS application but have no idea what it is all about, you can start by doing this quiz. Here you will gain some fundamental knowledge that helps you to find your way into the framework. It would be good if you already had some JavaScript experience.',
            'categories' => [5, 2, 6],
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        foreach ($this->quizzes as $quiz) {
           $item = \App\Models\Quiz::create([
               'name' => $quiz['name'],
               'description' => $quiz['description'],
               'thumbnail' => 'https://via.placeholder.com/350x150?text=' . $quiz['name'],
           ]);
            $item->categories()->sync($quiz['categories']);
        }
    }

    private function randomData()
    {
        $categories = \App\Models\Category::get();
        $quizzes = factory(\App\Models\Quiz::class, 10)->create();

        foreach ($quizzes as $quiz) {
            $random = $categories->random(random_int(1, $categories->count()));
            $quiz->categories()->sync($random);
        }
    }
}
