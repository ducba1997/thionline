<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateExamRequest;
use App\Http\Requests\Manage\UpdateExamRequest;
use App\Repositories\Manage\ExamRepository;
use App\Http\Controllers\AppBaseController;
use App\Model\ExamDetail;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class ExamController extends AppBaseController
{
    /** @var  ExamRepository */
    private $examRepository;

    public function __construct(ExamRepository $examRepo)
    {
        $this->examRepository = $examRepo;
    }

    /**
     * Display a listing of the Exam.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->examRepository->pushCriteria(new RequestCriteria($request));
        $exams = $this->examRepository->all();
        if(Auth::user()->id_permission!=1)
        $exams = $this->examRepository->where('id_users',Auth::id())->get();
        return view('backend.exams.index')
            ->with('exams', $exams);
    }

    /**
     * Show the form for creating a new Exam.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.exams.create');
    }

    /**
     * Store a newly created Exam in storage.
     *
     * @param CreateExamRequest $request
     *
     * @return Response
     */
    public function store(CreateExamRequest $request)
    {
        $id_user = \Auth::id();
        $input = [];
        $input['name']=$request->name;
        $input['slug']=str_slug($request->name);
        $input['id_users']=$id_user;
        $input['id_subject']=$request->id_subject;
        $input['id_grade']=$request->id_grade;
        $input['id_chapter']=$request->id_chapter;
        $input['description']=$request->description;
        $input['time_to_do']=$request->time_to_do;
        $input['allow_review_answer']=$request->allow_review_answer;
        $input['status']=$request->status;
        $exam = $this->examRepository->create($input);
        $total_count_question = 0;
        foreach($request->question as $value){
            $total_count_question+=$value;
        }
        foreach($request->question as $key => $value){
            if($value){
                $examDetail=new ExamDetail;
                $examDetail->id_level_question=$key;
                $examDetail->id_exam= $exam->id;
                $examDetail->count=$value;
                $examDetail->percent=100/$total_count_question*$value;
                $examDetail->save();
            }
        }
        Flash::success('Thêm mới thành công');

        return redirect(route('admin.exams.index'));
    }

    /**
     * Display the specified Exam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exam = $this->examRepository->findWithoutFail($id);

        if (empty($exam)) {
            Flash::error('Exam not found');

            return redirect(route('admin.exams.index'));
        }

        return view('backend.exams.show')->with('exam', $exam);
    }

    /**
     * Show the form for editing the specified Exam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exam = $this->examRepository->findWithoutFail($id);

        if (empty($exam)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.exams.index'));
        }

        return view('backend.exams.edit')->with('exam', $exam);
    }

    /**
     * Update the specified Exam in storage.
     *
     * @param  int              $id
     * @param UpdateExamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamRequest $request)
    {
        $exam = $this->examRepository->findWithoutFail($id);

        if (empty($exam)) {
            Flash::error('Exam not found');

            return redirect(route('admin.exams.index'));
        }

        $id_user = \Auth::id();
        $input = [];
        $input['name']=$request->name;
        $input['slug']=str_slug($request->name);
        $input['id_users']=$id_user;
        $input['id_subject']=$request->id_subject;
        $input['id_grade']=$request->id_grade;
        $input['id_chapter']=$request->id_chapter;
        $input['description']=$request->description;
        $input['time_to_do']=$request->time_to_do;
        $input['allow_review_answer']=$request->allow_review_answer;
        $input['status']=$request->status;
        $total_count_question = 0;
        ExamDetail::where('id_exam',$exam->id)->delete();
        foreach($request->question as $value){
            $total_count_question+=$value;
        }
        foreach($request->question as $key => $value){
            if($value){
                $examDetail=new ExamDetail;
                $examDetail->id_level_question=$key;
                $examDetail->id_exam= $exam->id;
                $examDetail->count=$value;
                $examDetail->percent=100/$total_count_question*$value;
                $examDetail->save();
            }
        }
        $exam = $this->examRepository->update($input, $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.exams.index'));
    }

    /**
     * Remove the specified Exam from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exam = $this->examRepository->findWithoutFail($id);

        if (empty($exam)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.exams.index'));
        }

        $this->examRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.exams.index'));
    }
}
