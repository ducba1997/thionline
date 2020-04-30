<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateGenderRequest;
use App\Http\Requests\Manage\UpdateGenderRequest;
use App\Repositories\Manage\GenderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GenderController extends AppBaseController
{
    /** @var  GenderRepository */
    private $genderRepository;

    public function __construct(GenderRepository $genderRepo)
    {
        $this->genderRepository = $genderRepo;
    }

    /**
     * Display a listing of the Gender.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->genderRepository->pushCriteria(new RequestCriteria($request));
        $genders = $this->genderRepository->all();

        return view('backend.genders.index')
            ->with('genders', $genders);
    }

    /**
     * Show the form for creating a new Gender.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.genders.create');
    }

    /**
     * Store a newly created Gender in storage.
     *
     * @param CreateGenderRequest $request
     *
     * @return Response
     */
    public function store(CreateGenderRequest $request)
    {
        $input = $request->all();

        $gender = $this->genderRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.genders.index'));
    }

    /**
     * Display the specified Gender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gender = $this->genderRepository->findWithoutFail($id);

        if (empty($gender)) {
            Flash::error('Gender not found');

            return redirect(route('admin.genders.index'));
        }

        return view('backend.genders.show')->with('gender', $gender);
    }

    /**
     * Show the form for editing the specified Gender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gender = $this->genderRepository->findWithoutFail($id);

        if (empty($gender)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.genders.index'));
        }

        return view('backend.genders.edit')->with('gender', $gender);
    }

    /**
     * Update the specified Gender in storage.
     *
     * @param  int              $id
     * @param UpdateGenderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGenderRequest $request)
    {
        $gender = $this->genderRepository->findWithoutFail($id);

        if (empty($gender)) {
            Flash::error('Gender not found');

            return redirect(route('admin.genders.index'));
        }

        $gender = $this->genderRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.genders.index'));
    }

    /**
     * Remove the specified Gender from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gender = $this->genderRepository->findWithoutFail($id);

        if (empty($gender)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.genders.index'));
        }

        $this->genderRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.genders.index'));
    }
}
