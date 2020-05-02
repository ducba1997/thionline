<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateGradeRequest;
use App\Http\Requests\Manage\UpdateGradeRequest;
use App\Repositories\Manage\GradeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GradeController extends AppBaseController
{
    /** @var  GradeRepository */
    private $gradeRepository;

    public function __construct(GradeRepository $gradeRepo)
    {
        $this->gradeRepository = $gradeRepo;
    }

    /**
     * Display a listing of the Grade.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gradeRepository->pushCriteria(new RequestCriteria($request));
        $grades = $this->gradeRepository->all();

        return view('backend.grades.index')
            ->with('grades', $grades);
    }

    /**
     * Show the form for creating a new Grade.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.grades.create');
    }

    /**
     * Store a newly created Grade in storage.
     *
     * @param CreateGradeRequest $request
     *
     * @return Response
     */
    public function store(CreateGradeRequest $request)
    {
        $request->merge(['slug' => str_slug($request->name)]);
        $input = $request->all();
        $grade = $this->gradeRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.grades.index'));
    }

    /**
     * Display the specified Grade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grade = $this->gradeRepository->findWithoutFail($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('admin.grades.index'));
        }

        return view('backend.grades.show')->with('grade', $grade);
    }

    /**
     * Show the form for editing the specified Grade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grade = $this->gradeRepository->findWithoutFail($id);

        if (empty($grade)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.grades.index'));
        }

        return view('backend.grades.edit')->with('grade', $grade);
    }

    /**
     * Update the specified Grade in storage.
     *
     * @param  int              $id
     * @param UpdateGradeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGradeRequest $request)
    {
        $grade = $this->gradeRepository->findWithoutFail($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('admin.grades.index'));
        }
        $request->merge(['slug' => str_slug($request->name)]);
        $grade = $this->gradeRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.grades.index'));
    }

    /**
     * Remove the specified Grade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grade = $this->gradeRepository->findWithoutFail($id);

        if (empty($grade)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.grades.index'));
        }

        $this->gradeRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.grades.index'));
    }
}
