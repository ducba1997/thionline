<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateQuestionRequest;
use App\Http\Requests\Manage\UpdateQuestionRequest;
use App\Repositories\Manage\QuestionRepository;
use App\Http\Controllers\AppBaseController;
use App\Imports\QuestionImport;
use App\Models\Manage\Question;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class QuestionController extends AppBaseController
{
    /** @var  QuestionRepository */
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepo)
    {
        $this->questionRepository = $questionRepo;
    }

    /**
     * Display a listing of the Question.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->questionRepository->pushCriteria(new RequestCriteria($request));
        if($request->exam)
            $questions = $this->questionRepository->where('id_exam',$request->exam)->get();
        else
        $questions = $this->questionRepository->all();

        return view('backend.questions.index')
            ->with('questions', $questions);
    }

    /**
     * Show the form for creating a new Question.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.questions.create');
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param CreateQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {
        $input = $request->all();

        $question = $this->questionRepository->create($input);

        Flash::success('Thêm mới thành công');
        if($request->exam)
            return redirect(route('admin.questions.index').'?exam='.$request->exam);
        else
            return redirect(route('admin.questions.index'));
    }
    public function getImport(){
        return view('backend.questions.importexcel');
    } 
    public function postImport(Request $request){
        $import = Excel::import(new QuestionImport($request->id_exam), request()->file('fileExcel'));
        Flash::success('Thêm dữ liệu từ file thành công');
        if($request->exam)
            return redirect(route('admin.questions.index').'?exam='.$request->exam);
        else
            return redirect(route('admin.questions.index'));
    }
    public function deleteMulti(Request $request){
        Question::whereIn('id',$request->arr_id_question)->delete();

        Flash::success('Đã xóa dữ liệu thành công.');

        
    }
    /**
     * Display the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $question = $this->questionRepository->findWithoutFail($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('admin.questions.index'));
        }

        return view('backend.questions.show')->with('question', $question);
    }

    /**
     * Show the form for editing the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $question = $this->questionRepository->findWithoutFail($id);

        if (empty($question)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.questions.index'));
        }

        return view('backend.questions.edit')->with('question', $question);
    }

    /**
     * Update the specified Question in storage.
     *
     * @param  int              $id
     * @param UpdateQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionRequest $request)
    {
        $question = $this->questionRepository->findWithoutFail($id);
        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('admin.questions.index'));
        }

        $question = $this->questionRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');
        if($request->exam)
            return redirect(route('admin.questions.index').'?exam='.$request->exam);
        else
            return redirect(route('admin.questions.index'));
    }

    /**
     * Remove the specified Question from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id,Request $req)
    {
        $question = $this->questionRepository->findWithoutFail($id);

        if (empty($question)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.questions.index'));
        }

        $this->questionRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        if($req->exam)
            return redirect(route('admin.questions.index').'?exam='.$req->exam);
        else
            return redirect(route('admin.questions.index'));
    }
}
