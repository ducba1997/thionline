<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateLevelQuestionRequest;
use App\Http\Requests\Manage\UpdateLevelQuestionRequest;
use App\Repositories\Manage\LevelQuestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LevelQuestionController extends AppBaseController
{
    /** @var  LevelQuestionRepository */
    private $levelQuestionRepository;

    public function __construct(LevelQuestionRepository $levelQuestionRepo)
    {
        $this->levelQuestionRepository = $levelQuestionRepo;
    }

    /**
     * Display a listing of the LevelQuestion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->levelQuestionRepository->pushCriteria(new RequestCriteria($request));
        $levelQuestions = $this->levelQuestionRepository->all();

        return view('backend.level_questions.index')
            ->with('levelQuestions', $levelQuestions);
    }

    /**
     * Show the form for creating a new LevelQuestion.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.level_questions.create');
    }

    /**
     * Store a newly created LevelQuestion in storage.
     *
     * @param CreateLevelQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateLevelQuestionRequest $request)
    {
        $input = $request->all();

        $levelQuestion = $this->levelQuestionRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.levelQuestions.index'));
    }

    /**
     * Display the specified LevelQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $levelQuestion = $this->levelQuestionRepository->findWithoutFail($id);

        if (empty($levelQuestion)) {
            Flash::error('Level Question not found');

            return redirect(route('admin.levelQuestions.index'));
        }

        return view('backend.level_questions.show')->with('levelQuestion', $levelQuestion);
    }

    /**
     * Show the form for editing the specified LevelQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $levelQuestion = $this->levelQuestionRepository->findWithoutFail($id);

        if (empty($levelQuestion)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.levelQuestions.index'));
        }

        return view('backend.level_questions.edit')->with('levelQuestion', $levelQuestion);
    }

    /**
     * Update the specified LevelQuestion in storage.
     *
     * @param  int              $id
     * @param UpdateLevelQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLevelQuestionRequest $request)
    {
        $levelQuestion = $this->levelQuestionRepository->findWithoutFail($id);

        if (empty($levelQuestion)) {
            Flash::error('Level Question not found');

            return redirect(route('admin.levelQuestions.index'));
        }

        $levelQuestion = $this->levelQuestionRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.levelQuestions.index'));
    }

    /**
     * Remove the specified LevelQuestion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $levelQuestion = $this->levelQuestionRepository->findWithoutFail($id);

        if (empty($levelQuestion)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.levelQuestions.index'));
        }

        $this->levelQuestionRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.levelQuestions.index'));
    }
}
