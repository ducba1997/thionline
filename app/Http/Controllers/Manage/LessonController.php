<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateLessonRequest;
use App\Http\Requests\Manage\UpdateLessonRequest;
use App\Repositories\Manage\LessonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LessonController extends AppBaseController
{
    /** @var  LessonRepository */
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepo)
    {
        $this->lessonRepository = $lessonRepo;
    }

    /**
     * Display a listing of the Lesson.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lessonRepository->pushCriteria(new RequestCriteria($request));
        $lessons = $this->lessonRepository->all();

        return view('backend.lessons.index')
            ->with('lessons', $lessons);
    }

    /**
     * Show the form for creating a new Lesson.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.lessons.create');
    }

    /**
     * Store a newly created Lesson in storage.
     *
     * @param CreateLessonRequest $request
     *
     * @return Response
     */
    public function store(CreateLessonRequest $request)
    {
        $request->merge(['slug' => str_slug($request->name),'id_users'=>\Auth::id()]);
        //dd($request);
        $input = $request->all();

        $lesson = $this->lessonRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.lessons.index'));
    }

    /**
     * Display the specified Lesson.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lesson = $this->lessonRepository->findWithoutFail($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('admin.lessons.index'));
        }

        return view('backend.lessons.show')->with('lesson', $lesson);
    }

    /**
     * Show the form for editing the specified Lesson.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lesson = $this->lessonRepository->findWithoutFail($id);

        if (empty($lesson)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.lessons.index'));
        }

        return view('backend.lessons.edit')->with('lesson', $lesson);
    }

    /**
     * Update the specified Lesson in storage.
     *
     * @param  int              $id
     * @param UpdateLessonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLessonRequest $request)
    {
        $lesson = $this->lessonRepository->findWithoutFail($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('admin.lessons.index'));
        }
        $request->merge(['slug' => str_slug($request->name)]);
        $lesson = $this->lessonRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.lessons.index'));
    }

    /**
     * Remove the specified Lesson from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lesson = $this->lessonRepository->findWithoutFail($id);

        if (empty($lesson)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.lessons.index'));
        }

        $this->lessonRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.lessons.index'));
    }
}
