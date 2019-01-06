<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class AnswerTableSeeder extends Seeder
{

    /**
     * the answer to the text questions
     *
     * @var string
     */
    protected $textWord = 'lorem';


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = \App\Models\Task::get();

        foreach ($tasks as $task) {
            $this->{$this->buildFullMethodName($task->type->name)}($task);
        }
    }

    /**
     *
     *
     * @param $type
     * @return string
     */
    private function buildFullMethodName($type)
    {
        return 'fill' . camel_case($type) . 'Task';
    }

    /**
     *
     *
     * @param \App\Models\Task $task
     * @throws Exception
     */
    private function fillMultipleChoiceTask(\App\Models\Task $task)
    {
        $answers = $this->createAnswers();

        $this->prefillAnswers($answers, $task);

        $this->markCorrectItems($answers, random_int(1, $answers->count()));
    }

    /**
     *
     *
     * @param \App\Models\Task $task
     */
    private function fillSingleChoiceTask(\App\Models\Task $task)
    {
        $answers = $this->createAnswers();

        $this->prefillAnswers($answers, $task);

        $this->markCorrectItems($answers);
    }

    /**
     * @param \App\Models\Task $task
     * @throws Exception
     */
    private function fillTextTask(\App\Models\Task $task)
    {
        $items = explode(" ", $task->text);

        $numberOfBlankSpots = $this->numberOfBlankSpots($items);

        $answers = $this->createAnswers($numberOfBlankSpots);

        $this->prefillAnswers($answers, $task, false);

        // insert blank spots randomly into an array
        $blanks = $this->createBlankSpotArray($numberOfBlankSpots);

        // Update task text
        $task->text = implode(" ", $this->insertRandomlyBlankSpots($items, $blanks));

        $task->save();
    }

    /**
     * @param $items
     * @param $blanks
     * @return mixed
     */
    private function insertRandomlyBlankSpots($items, $blanks)
    {
        // see: https://www.sitepoint.com/community/t/inserting-elements-from-one-array-into-random-locations-within-another-array/73688/7
        // How many elements are in the array we are inserting into
        $count = count($items);

        // What was the last insert position? Make sure the next will be greater than this
        $prev = 0;

        // Loop through each of our elements to insert
        foreach ($blanks as $value) {
            // Make sure first random position is no higher than the total count
            // minus the count of $blanks + 1
            if ($prev === 0) {
                $rand = rand($prev, $count - (count($blanks) + 1));
            } else {
                // Generate a random value, higher than the previous
                // random number but still less than count($items)
                $rand = rand($prev, $count);
            }
            // Store this as the previous value + 1
            $prev = ++$rand;

            // Insert our value into $items at the random position
            array_splice($items, $rand, 0, $value);
        }

        return $items;
    }

    /**
     *
     *
     * @param $count
     * @return array
     */
    private function createBlankSpotArray(int $count)
    {
        $blanks = [];

        for ($i = 1; $i <= $count; $i++) {
            array_push($blanks, '#ANSWER:' . $i . '#');
        }

        return $blanks;
    }

    /**
     * @param $items
     * @return int
     * @throws Exception
     */
    private function numberOfBlankSpots($items)
    {
        return random_int(1, (int)floor(count($items) / 2));
    }

    /**
     * @param int $count
     * @return mixed
     */
    private function createAnswers($count = 4)
    {
        return factory(\App\Models\Answer::class, $count)->create();
    }

    /**
     * @param Collection $answers
     * @param int $count
     */
    private function markCorrectItems(Collection $answers, $count = 1)
    {
        $random = $answers->random($count);
        $random->each(function ($answer) {
            $answer->correct_choice = true;
            $answer->save();
        });
    }

    /**
     * @param Collection $answers
     * @param \App\Models\Task $task
     * @param bool $choice
     */
    private function prefillAnswers(Collection $answers, \App\Models\Task $task, bool $choice = true)
    {
        $answers->each(function ($answer) use ($task, $choice) {

            if ($choice) {
                $answer->correct_choice = false;
            } else {
                $answer->correct_text = $this->textWord;
            }

            $answer->task_id = $task->id;
            $answer->order = $answer->id;
            $answer->save();
        });
    }
}
