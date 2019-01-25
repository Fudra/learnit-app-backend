<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{

    protected $items = [
        // Quiz 1 - Python Basics
        [
            'quiz_id' => 1,
            'tasks' => [
                [
                    'task_type_id' => 2,
                    'text' => 'What is Python? What are the benefits of using Python?',
                    'answers' => [
                        [
                            'text' => 'Python is a programming language in which objects can be used.',
                            'correct_choice' => true,
                            'correct_text' => null
                        ],
                        [
                            'text' => 'Python is a very big snake that kills her prey by strangling it.',
                            'correct_choice' => true,
                            'correct_text' => null
                        ],
                        [
                            'text' => 'Python is part of Monty Python, a very funny drama group that produced some great movies.',
                            'correct_choice' => true,
                            'correct_text' => null
                        ],
                        [
                            'text' => 'Python is a tasty dessert, mostly eaten in South-America.',
                            'correct_choice' => false,
                            'correct_text' => null
                        ]
                    ],
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'Is Python case sensitive when dealing with identifiers?',
                    'answers' => [
                        [
                            'text' => 'Yes',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'No',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Machine dependent',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'None of the above',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ]
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'Python uses #ANSWER:1# instead of #ANSWER:2# to structure code blocks.',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'indentations',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'brackets',
                        ],
                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What are the immutable built-in types that python provides?',
                    'answers' => [
                        [
                            'text' => 'Strings, Booleans, Numbers"',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Integers, Longs, Arrays',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Strings, Tuples, Numbers',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Lists, Sets, Dictionaries',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'Can a for-loop be run with the expression: \"while x in i\"?',
                    'answers' => [
                        [
                            'text' => 'Yes',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'No',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is the output when following statement is executed ? \n >>>\"a\"+\"bc\"',
                    'answers' => [
                        [
                            'text' => 'a',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'bc',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'bca',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'abc',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'Iterators can be used to i#ANSWER:1# over c#ANSWER:2# and l#ANSWER:3#.',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'terate',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'ontainers',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'ists',
                        ],
                    ],

                ],
                [
                    'task_type_id' => 3,
                    'text' => 'A string that is used to describe functions, modules and classes in Python is called a #ANSWER:1#',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'docstring',
                        ],
                    ],
                ],
            ]
        ],

        // quiz 2 - Java Basics
        [
            'quiz_id' => 2,
            'tasks' => [
                [
                    'task_type_id' => 2,
                    'text' => 'What is Java?',
                    'answers' => [
                        [
                            'text' => 'Java is a high-level programming language.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Java is an island that belongs to Indonesia.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'The Java cake is a very tasty dessert that usually has some melted chocolate within a small cake.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Java is a chicken breed that comes from the USA.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                    ]
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'Java is an #ANSWER:1#-oriented programming language that is also #ANSWER:2# independent',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'object',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'plattform',
                        ],
                    ]
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What are the main parts that a Java program consists of?',
                    'answers' => [
                        [
                            'text' => 'Classes and Teachers',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Classes and Students',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Classes and Objects',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Classes and Scripts',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ]
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'What kind of variables are available in Java?',
                    'answers' => [
                        [
                            'text' => 'Universe varaibles',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Local variables',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Instance variables',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Class variables',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'Write the constructor of the class World: #ANSWER:1#',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'public World()',
                        ],
                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is an access modifier?',
                    'answers' => [
                        [
                            'text' => 'It is a code that gives you permission to a huge Java community.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It tells you whether you are allowed to use the Java code that someone else has written.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It allows to set different access levels for classes, variables and methods, for example.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It can be used to tell classes about their importance.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'What are the three steps of creating an object for a class? \n D#ANSWER:1#, I#ANSWER:2#, I#ANSWER:3#.',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'eclare',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'nstantiate',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'nitialize',
                        ],
                    ],
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'Choose the access modifiers available in Java',
                    'answers' => [
                        [
                            'text' => 'private',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'public',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'global',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'protected',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                    ],
                ],
            ]
        ],

        // quiz 3 - Databases for Dummys
        [
            'quiz_id' => 3,
            'tasks' => [
                [
                    'task_type_id' => 1,
                    'text' => 'What is a database?',
                    'answers' => [
                        [
                            'text' => 'A database is used to store different data.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'AA database is a basic data format.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'A database the secret base station of Darth Vader and the imperium.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'The basic commands in the Structured Query Language are: S#ANSWER:1# F#ANSWER:2#, W#ANSWER:3#',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'elect',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'rom',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'here',
                        ],
                    ],
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'What can be found in a database?',
                    'answers' => [
                        [
                            'text' => 'Windows',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Tables',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Friend',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Relations',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is a data redundancy?',
                    'answers' => [
                        [
                            'text' => 'Unimportant data is stored within the database.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Data is duplicated within the database.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'There is not enough data stored in the database to justify the usage of a database.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'None of the above',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'What does SQL stand for? S#ANSWER:1# Q#ANSWER:2# L#ANSWER:3#',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'trunctured',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'uery',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'anguage',
                        ],
                    ],
                ],
            ]
        ],

        // Quiz 4 - Into Python
        [
            'quiz_id' => 4,
            'tasks' => [
                [
                    'task_type_id' => 2,
                    'text' => 'How do you delete a file in Python?',
                    'answers' => [
                        [
                            'text' => 'command os.remove',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'command os.destroy',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'command os.delete',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'command os.unlink',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],

                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is the output of the functions shown below? \n ord(65) \n ord(\'A\')',
                    'answers' => [
                        [
                            'text' => 'A \n65',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Error \n65',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'A \nError',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Error \nError',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],

                    ],
                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is the output of the code shown below?\n m = re.search(\'a\', \'The blue umbrella\')\n m.re.pattern',
                    'answers' => [
                        [
                            'text' => '{}',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'The blue umbrella',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'a',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'No output',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'A Python #ANSWER:1# is a specific change that we make in Python syntax to alter functions easily.',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'decorator',
                        ],
                    ],
                ],
            ]
        ],

        // Quiz 5 - VueJS quick start
        [
            'quiz_id' => 5,
            'tasks' => [
                [
                    'task_type_id' => 1,
                    'text' => 'What is VueJS?',
                    'answers' => [
                        [
                            'text' => 'It is a construction kid for websites. You don\'t need programming experience.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It is a CSS framework that helps you to make your application beautiful.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It is JavaScript frontend framework that enables you to build frontend indepently from any backend.',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'It stands for Vue Jupiter and Stars and is a web application that helps you to locate planets on the nightsky.',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'What are some of the most important features of VueJS?',
                    'answers' => [
                        [
                            'text' => 'Virtual DOM',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Components',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Routing',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Templates',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                    ],

                ],
                [
                    'task_type_id' => 1,
                    'text' => 'What is the meaning of ":" in front of an HTML property?',
                    'answers' => [
                        [
                            'text' => 'Introduction of the property',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Marks important data',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Binds data dynamically to the DOM object',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'Only decoration without meaning',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 2,
                    'text' => 'What are default directives in Vue?',
                    'answers' => [
                        [
                            'text' => 'v-if',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'v-tag',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'v-bind',
                            'correct_choice' => true,
                            'correct_text' => null,
                        ],
                        [
                            'text' => 'v-curse',
                            'correct_choice' => false,
                            'correct_text' => null,
                        ],
                    ],
                ],
                [
                    'task_type_id' => 3,
                    'text' => 'VueJS ist ein Frontend-#ANSWER:1# das auf #ANSWER:2# basiert und unter einer #ANSWER:3#-source Lizenz zur Verfügung gestellt wird.',
                    'answers' => [
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'framework',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'javascript',
                        ],
                        [
                            'text' => '',
                            'correct_choice' => null,
                            'correct_text' => 'open',
                        ],
                    ],
                ],
            ]
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->items as $item) {
            foreach ($item['tasks'] as $task) {
                $newTask = $this->createTask($item, $task);

                foreach ($task['answers'] as $answer) {
                    $this->createAnswer($answer, $newTask);
                }
            }
        }

    }

    protected function createTask($item, $task)
    {
        $task = \App\Models\Task::create(
            [
                'quiz_id' => $item['quiz_id'],
                'text' => $task['text'],
                'order' => 1,
                'task_type_id' => $task['task_type_id']
            ]
        );

        $task->update(['order' => $task->id]);

        return $task;
    }

    protected function createAnswer($answer, $task)
    {
        $newAnswer = \App\Models\Answer::create(
            [
                'order' => 1,
                'text' => $answer['text'],
                'correct_text' => $answer['correct_text'],
                'correct_choice' => $answer['correct_choice'],
                'task_id' => $task->id,
            ]
        );

        $newAnswer->update(['order' => $newAnswer->id]);

        return $newAnswer;
    }


    public function randomData()
    {
        $quizzes = \App\Models\Quiz::all();
        $types = \App\Models\TaskType::all();
        $tasks = factory(\App\Models\Task::class, 80)->create();

        foreach ($tasks as $task) {
            $quiz = $quizzes->random(1)->first();
            $type = $types->random(1)->first();
            $task->update(['order' => $task->id, 'quiz_id' => $quiz->id, 'task_type_id' => $type->id]);
        }
    }
}
