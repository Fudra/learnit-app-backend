<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     *  do not change the order!
     *
     * @var array
     */
    protected $seedTables = [
        CategoryTableSeeder::class,
        TaskTypeTableSeeder::class,
        QuizTableSeeder::class,
        TaskTableSeeder::class,
        AnswerTableSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call($this->seedTables);
    }
}
