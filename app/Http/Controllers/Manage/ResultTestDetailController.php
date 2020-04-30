<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateResultTestDetailRequest;
use App\Http\Requests\Manage\UpdateResultTestDetailRequest;
use App\Repositories\Manage\ResultTestDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ResultTestDetailController extends AppBaseController
{
    /** @var  ResultTestDetailRepository */
    private $resultTestDetailRepository;

    public function __construct(ResultTestDetailRepository $resultTestDetailRepo)
    {
        $this->resultTestDetailRepository = $resultTestDetailRepo;
    }

    /**
     * Display a listing of the ResultTestDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->resultTestDetailRepository->pushCriteria(new RequestCriteria($request));
        $resultTestDetails = $this->resultTestDetailRepository->all();

        return view('backend.result_test_details.index')
            ->with('resultTestDetails', $resultTestDetails);
    }

    /**
     * Show the form for creating a new ResultTestDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.result_test_details.create');
    }

    /**
     * Store a newly created ResultTestDetail in storage.
     *
     * @param CreateResultTestDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateResultTestDetailRequest $request)
    {
        $input = $request->all();

        $resultTestDetail = $this->resultTestDetailRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.resultTestDetails.index'));
    }

    /**
     * Display the specified ResultTestDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resultTestDetail = $this->resultTestDetailRepository->findWithoutFail($id);

        if (empty($resultTestDetail)) {
            Flash::error('Result Test Detail not found');

            return redirect(route('admin.resultTestDetails.index'));
        }

        return view('backend.result_test_details.show')->with('resultTestDetail', $resultTestDetail);
    }

    /**
     * Show the form for editing the specified ResultTestDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resultTestDetail = $this->resultTestDetailRepository->findWithoutFail($id);

        if (empty($resultTestDetail)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.resultTestDetails.index'));
        }

        return view('backend.result_test_details.edit')->with('resultTestDetail', $resultTestDetail);
    }

    /**
     * Update the specified ResultTestDetail in storage.
     *
     * @param  int              $id
     * @param UpdateResultTestDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResultTestDetailRequest $request)
    {
        $resultTestDetail = $this->resultTestDetailRepository->findWithoutFail($id);

        if (empty($resultTestDetail)) {
            Flash::error('Result Test Detail not found');

            return redirect(route('admin.resultTestDetails.index'));
        }

        $resultTestDetail = $this->resultTestDetailRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.resultTestDetails.index'));
    }

    /**
     * Remove the specified ResultTestDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resultTestDetail = $this->resultTestDetailRepository->findWithoutFail($id);

        if (empty($resultTestDetail)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.resultTestDetails.index'));
        }

        $this->resultTestDetailRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.resultTestDetails.index'));
    }
}
