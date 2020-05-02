<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateExamRequest;
use App\Http\Requests\Manage\UpdateExamRequest;
use App\Repositories\Manage\ExamRepository;
use App\Http\Controllers\AppBaseController;
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
        $id_user = Auth::id();
        $request->merge(['slug' => str_slug($request->name)]);
        $request->merge(['id_users' => str_slug($id_user)]);
        $input = $request->all();

        $exam = $this->examRepository->create($input);

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

        $id_user = Auth::id();
        $request->merge(['slug' => str_slug($request->name)]);
        $request->merge(['id_users' => str_slug($id_user)]);
        $exam = $this->examRepository->update($request->all(), $id);

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
