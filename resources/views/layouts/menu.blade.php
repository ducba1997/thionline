<li class="treeview">
    <a href="#">
        <i class="fa fa-gears"></i>
        <span>Cài đặt cố định</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('admin/genders*') ? 'active' : '' }}">
            <a href="{{ route('admin.genders.index') }}"><i class="fa fa-edit"></i><span>Quản lý giới tính</span></a>
        </li>
        <li class="{{ Request::is('admin/permissions*') ? 'active' : '' }}">
            <a href="{{ route('admin.permissions.index') }}"><i class="fa fa-edit"></i><span>Quản lý quyền</span></a>
        </li>
        <li class="{{ Request::is('admin/grades*') ? 'active' : '' }}">
            <a href="{{ route('admin.grades.index') }}"><i class="fa fa-edit"></i><span>Quản lý khối</span></a>
        </li>
        <li class="{{ Request::is('admin/subjects*') ? 'active' : '' }}">
            <a href="{{ route('admin.subjects.index') }}"><i class="fa fa-edit"></i><span>Quản lý môn học</span></a>
        </li>
        <li class="{{ Request::is('admin/chapters*') ? 'active' : '' }}">
            <a href="{{ route('admin.chapters.index') }}"><i class="fa fa-edit"></i><span>Quản lý chương</span></a>
        </li>
        <li class="{{ Request::is('admin/levelQuestions*') ? 'active' : '' }}">
            <a href="{{ route('admin.levelQuestions.index') }}"><i class="fa fa-edit"></i><span>Mức độ câu hỏi</span></a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
    <a href="{{ route('admin.users.index') }}"><i class="fa fa-edit"></i><span>Quản lý người dùng</span></a>
</li>



<li class="{{ Request::is('admin/lessons*') ? 'active' : '' }}">
    <a href="{{ route('admin.lessons.index') }}"><i class="fa fa-edit"></i><span>Quản lý bài học</span></a>
</li>



<li class="{{ Request::is('admin/exams*') ? 'active' : '' }}">
    <a href="{{ route('admin.exams.index') }}"><i class="fa fa-edit"></i><span>Quản lý đề thi</span></a>
</li>

<li class="{{ Request::is('admin/examDetails*') ? 'active' : '' }}">
    <a href="{{ route('admin.examDetails.index') }}"><i class="fa fa-edit"></i><span>Đề thi chi tiết</span></a>
</li>

<li class="{{ Request::is('admin/questions*') ? 'active' : '' }}">
    <a href="{{ route('admin.questions.index') }}"><i class="fa fa-edit"></i><span>Quản lý câu hỏi</span></a>
</li>

<li class="{{ Request::is('admin/resultTests*') ? 'active' : '' }}">
    <a href="{{ route('admin.resultTests.index') }}"><i class="fa fa-edit"></i><span>Quản lý bài thi</span></a>
</li>

<li class="{{ Request::is('admin/resultTestDetails*') ? 'active' : '' }}">
    <a href="{{ route('admin.resultTestDetails.index') }}"><i class="fa fa-edit"></i><span>Chi tiết bài thi</span></a>
</li>