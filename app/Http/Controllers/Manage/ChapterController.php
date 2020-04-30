<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateChapterRequest;
use App\Http\Requests\Manage\UpdateChapterRequest;
use App\Repositories\Manage\ChapterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ChapterController extends AppBaseController
{
    /** @var  ChapterRepository */
    private $chapterRepository;

    public function __construct(ChapterRepository $chapterRepo)
    {
        $this->chapterRepository = $chapterRepo;
    }

    /**
     * Display a listing of the Chapter.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->chapterRepository->pushCriteria(new RequestCriteria($request));
        $chapters = $this->chapterRepository->all();

        return view('backend.chapters.index')
            ->with('chapters', $chapters);
    }

    /**
     * Show the form for creating a new Chapter.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.chapters.create');
    }

    /**
     * Store a newly created Chapter in storage.
     *
     * @param CreateChapterRequest $request
     *
     * @return Response
     */
    public function store(CreateChapterRequest $request)
    {
        $input = $request->all();

        $chapter = $this->chapterRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.chapters.index'));
    }

    /**
     * Display the specified Chapter.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        return view('backend.chapters.show')->with('chapter', $chapter);
    }

    /**
     * Show the form for editing the specified Chapter.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.chapters.index'));
        }

        return view('backend.chapters.edit')->with('chapter', $chapter);
    }

    /**
     * Update the specified Chapter in storage.
     *
     * @param  int              $id
     * @param UpdateChapterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChapterRequest $request)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        $chapter = $this->chapterRepository->update($request->all(), $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.chapters.index'));
    }

    /**
     * Remove the specified Chapter from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.chapters.index'));
        }

        $this->chapterRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.chapters.index'));
    }
}
