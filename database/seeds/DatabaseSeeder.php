<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // do not change the order!
//        $this->call(CategorySeeder::class);
//        $this->call(TaskTypeSeeder::class);
//        $this->call(QuizSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
