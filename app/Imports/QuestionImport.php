<?php

namespace App\Imports;

use App\Models\Manage\LevelQuestion;
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
    public function __construct($exam){
        $this->exam=$exam;
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
        $id_level_question=1;
        if(LevelQuestion::where('name',$row['muc_do_cau_hoi']))
            $id_level_question=LevelQuestion::where('name',$row['muc_do_cau_hoi'])->first()->id;
        //dd($id_level_question);
        return new Question([
            'id_exam' => $this->exam,
            'id_level_question' => $id_level_question,
            'content' => $row['cau_hoi'],
            'correct_answer' => $row['dap_an_dung'],
            'answer_1' =>$row['dap_an_a'],
            'answer_2' => $row['dap_an_b'],
            'answer_3' => $row['dap_an_c'],
        ]);
    }
}
