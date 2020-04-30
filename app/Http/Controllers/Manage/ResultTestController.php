<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateResultTestRequest;
use App\Http\Requests\Manage\UpdateResultTestRequest;
use App\Repositories\Manage\ResultTestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ResultTestController extends AppBaseController
{
    /** @var  ResultTestRepository */
    private $resultTestRepository;

    public function __construct(ResultTestRepository $resultTestRepo)
    {
        $this->resultTestRepository = $resultTestRepo;
    }

    /**
     * Display a listing of the ResultTest.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->resultTestRepository->pushCriteria(new RequestCriteria($request));
        $resultTests = $this->resultTestRepository->all();

        return view('backend.result_tests.index')
            ->with('resultTests', $resultTests);
    }

    /**
     * Show the form for creating a new ResultTest.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.result_tests.create');
    }

    /**
     * Store a newly created ResultTest in storage.
     *
     * @param CreateResultTestRequest $request
     *
     * @return Response
     */
    public function store(CreateResultTestRequest $request)
    {
        $input = $request->all();

        $resultTest = $this->resultTestRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.resultTests.index'));
    }

    /**
     * Display the specified ResultTest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resultTest = $this->resultTestRepository->findWithoutFail($id);

        if (empty($resultTest)) {
            Flash::error('Result Test not found');

            return redirect(route('admin.resultTests.index'));
        }

        return view('backend.result_tests.show')->with('resultTest', $resultTest);
    }

    /**
     * Show the form for editing the specified ResultTest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resultTest = $this->resultTestRepository->findWithoutFail($id);

        if (empty($resultTest)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.resultTests.index'));
        }

        return view('backend.result_tests.edit')->with('resultTest', $resultTest);
    }

    /**
     * Update the specified ResultTest in storage.
     *
     * @param  int              $id
     * @param UpdateResultTestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResultTestRequest $request)
    {
        $resultTest = $this->resultTestRepository->findWithoutFail($id);

        if (empty($resultTest)) {
            Flash::error('Result Test not found');

            return redirect(route('admin.resultTests.index'));
        }

        $resultTest = $this->resultTestRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.resultTests.index'));
    }

    /**
     * Remove the specified ResultTest from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resultTest = $this->resultTestRepository->findWithoutFail($id);

        if (empty($resultTest)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.resultTests.index'));
        }

        $this->resultTestRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.resultTests.index'));
    }
}
