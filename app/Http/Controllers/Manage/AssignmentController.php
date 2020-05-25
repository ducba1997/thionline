<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateAssignmentRequest;
use App\Http\Requests\Manage\UpdateAssignmentRequest;
use App\Repositories\Manage\AssignmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use File;
use Auth;
class AssignmentController extends AppBaseController
{
    /** @var  AssignmentRepository */
    private $assignmentRepository;

    public function __construct(AssignmentRepository $assignmentRepo)
    {
        $this->assignmentRepository = $assignmentRepo;
    }

    /**
     * Display a listing of the Assignment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        
        $this->assignmentRepository->pushCriteria(new RequestCriteria($request));
        $assignments = $this->assignmentRepository->all();
        if(Auth::user()->id_permission!=1)
        $assignments = $this->assignmentRepository->where('id_users',Auth::id())->get();
        return view('backend.assignments.index')
            ->with('assignments', $assignments);
    }

    /**
     * Show the form for creating a new Assignment.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.assignments.create');
    }

    /**
     * Store a newly created Assignment in storage.
     *
     * @param CreateAssignmentRequest $request
     *
     * @return Response
     */
    public function store(CreateAssignmentRequest $request)
    {
        
        if ($request->hasFile('url')) {
            $file = $request->url;
            $arrhash= explode(".",$file->hashName());
            $arrnohash=explode(".",$file->getClientOriginalName());
            $newname=$arrnohash[0].$arrhash[0].".".$arrnohash[1];
            $file->move(public_path()."/upload/files/",$newname);
            //$request->merge(['url' => $newname]);
        }
        else{
            Flash::error('Chưa chọn tập tin');
            return redirect(route('admin.assignments.index'));
        }
        $request->merge(['slug' => str_slug($request->name),'url' => $newname]);
        $id_users = Auth::id();
        $input=[];
        $input['name'] = $request->name;
        $input['slug']=str_slug($request->name);
        $input['description'] = $request->description;
        $input['id_users'] = $id_users;
        $input['id_grade'] = $request->id_grade;
        $input['id_subject'] = $request->id_subject;
        $input['id_chapter'] = $request->id_chapter;
        $input['url'] = $newname;
        $input['status'] = $request->status;
        $assignment = $this->assignmentRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.assignments.index'));
    }

    /**
     * Display the specified Assignment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assignment = $this->assignmentRepository->findWithoutFail($id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('admin.assignments.index'));
        }

        return view('backend.assignments.show')->with('assignment', $assignment);
    }

    /**
     * Show the form for editing the specified Assignment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assignment = $this->assignmentRepository->findWithoutFail($id);

        if (empty($assignment)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.assignments.index'));
        }

        return view('backend.assignments.edit')->with('assignment', $assignment);
    }

    /**
     * Update the specified Assignment in storage.
     *
     * @param  int              $id
     * @param UpdateAssignmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssignmentRequest $request)
    {
        $assignment = $this->assignmentRepository->findWithoutFail($id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('admin.assignments.index'));
        }
        $request->merge(['slug' => str_slug($request->name)]);
        $assignment = $this->assignmentRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.assignments.index'));
    }

    /**
     * Remove the specified Assignment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assignment = $this->assignmentRepository->findWithoutFail($id);

        if (empty($assignment)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.assignments.index'));
        }
        File::delete(public_path()."/upload/files/".$assignment->url);
        $this->assignmentRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.assignments.index'));
    }
}
