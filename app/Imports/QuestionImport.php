<?php

namespace App\Imports;

use App\Models\Manage\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class QuestionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $exam,$level_question;
    public function __construct($exam,$level_question){
        $this->exam=$exam;
        $this->level_question=$level_question;
    }
    public function headingRow() : int
    {
        return 6;
    }

    public function model(array $row)
    {
        //echo $row[1];
        //dd($row);
        if(!$row['cau_hoi'])
            return;
        return new Question([
            'id_exam' => $this->exam,
            'id_level_question' => $this->level_question,
            'content' => $row['cau_hoi'],
            'correct_answer' => $row['dap_an_dung'],
            'answer_1' =>$row['dap_an_a'],
            'answer_2' => $row['dap_an_b'],
            'answer_3' => $row['dap_an_c'],
        ]);
    }
}
