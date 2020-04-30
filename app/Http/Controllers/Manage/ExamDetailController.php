<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateExamDetailRequest;
use App\Http\Requests\Manage\UpdateExamDetailRequest;
use App\Repositories\Manage\ExamDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExamDetailController extends AppBaseController
{
    /** @var  ExamDetailRepository */
    private $examDetailRepository;

    public function __construct(ExamDetailRepository $examDetailRepo)
    {
        $this->examDetailRepository = $examDetailRepo;
    }

    /**
     * Display a listing of the ExamDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->examDetailRepository->pushCriteria(new RequestCriteria($request));
        $examDetails = $this->examDetailRepository->all();

        return view('backend.exam_details.index')
            ->with('examDetails', $examDetails);
    }

    /**
     * Show the form for creating a new ExamDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.exam_details.create');
    }

    /**
     * Store a newly created ExamDetail in storage.
     *
     * @param CreateExamDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateExamDetailRequest $request)
    {
        $input = $request->all();

        $examDetail = $this->examDetailRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.examDetails.index'));
    }

    /**
     * Display the specified ExamDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examDetail = $this->examDetailRepository->findWithoutFail($id);

        if (empty($examDetail)) {
            Flash::error('Exam Detail not found');

            return redirect(route('admin.examDetails.index'));
        }

        return view('backend.exam_details.show')->with('examDetail', $examDetail);
    }

    /**
     * Show the form for editing the specified ExamDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examDetail = $this->examDetailRepository->findWithoutFail($id);

        if (empty($examDetail)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.examDetails.index'));
        }

        return view('backend.exam_details.edit')->with('examDetail', $examDetail);
    }

    /**
     * Update the specified ExamDetail in storage.
     *
     * @param  int              $id
     * @param UpdateExamDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExamDetailRequest $request)
    {
        $examDetail = $this->examDetailRepository->findWithoutFail($id);

        if (empty($examDetail)) {
            Flash::error('Exam Detail not found');

            return redirect(route('admin.examDetails.index'));
        }

        $examDetail = $this->examDetailRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.examDetails.index'));
    }

    /**
     * Remove the specified ExamDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examDetail = $this->examDetailRepository->findWithoutFail($id);

        if (empty($examDetail)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.examDetails.index'));
        }

        $this->examDetailRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.examDetails.index'));
    }
}
