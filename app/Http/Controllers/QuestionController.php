<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionImport;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function import(Request $request) 
    {
        $import = Excel::import(new QuestionImport($request->id_exam,$request->id_level_question), request()->file('user_file'));
        return redirect('/');
    }
}
