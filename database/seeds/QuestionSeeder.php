<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <=20; $i++) {
            $question = new Question();
            $question->fill([
                'title' => 'question title ' . ' ' . $i,
                'text' => 'question text ' . ' ' . $i
            ]);

            $question->save();
        }
    }
}
