<div>
<?php
    $gradeItems = App\Models\Manage\Grade::whereIn('id',\App\Models\Manage\Exam::all()->pluck('id_grade'))->pluck('name', 'id');
    $subjectItems = App\Models\Manage\Subject::whereIn('id',\App\Models\Manage\Exam::all()->pluck('id_subject'))->pluck('name', 'id');
    $chapterItems = App\Models\Manage\Chapter::whereIn('id',\App\Models\Manage\Exam::all()->pluck('id_chapter'))->pluck('name', 'id');
    ?>

    <div class="pull-left">
        <label for="course_id">Khối:</label>
        <select id="grade" class="form-control" style="display: inline-block;width:63%">
            <option value="">All</option>
            @foreach($gradeItems as $data)
            <option value="{{$data}}">{{$data}}</option>
            @endforeach
        </select>
    </div>
    <div class="pull-left">
        <label for="">Môn:</label>
        <select id="subject" class="form-control" style="display: inline-block;width:63%">
            <option value="">All</option>
            @foreach($subjectItems as $data)
            <option value="{{$data}}">{{$data}}</option>
            @endforeach
        </select>
    </div>
    <div class="pull-left" style="width: 166px">
        <label for="">Chương:</label>
        <select id="chapter" class="form-control" style="display: inline-block;width:63%">
            <option value="">All</option>
            @foreach($chapterItems as $data)
            <option value="{{$data}}">{{$data}}</option>
            @endforeach
        </select>
    </div>
</div>
    <table class="ui celled table" id="exams-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Khối</th>
        <th>Môn</th>
        <th>Chương</th>
        <th style="width: 260px">Tên</th>
        <th>Chi tiết</th>
        <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($exams as $exam)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $exam->idGrade->name }}</td>
            <td>{{ $exam->idSubject->name }}</td>
            <td>{{ $exam->idChapter->name }}</td>
            <td>{{ $exam->name }}</td>
            <?php $countquestion=App\Model\ExamDetail::where('id_exam',$exam->id)->sum('count'); ?>
            <td>Thời gian: {{gmdate("i", $exam->time_to_do)." p "}}  <br/>Số lượng: {{$countquestion}} câu [<a style="text-decoration: underline;" href="{{ route('admin.examDetails.index') }}?exam={{$exam->id}}">Chi tiết</a>]<br/>Câu hỏi: [<a style="text-decoration: underline;" href="{{ route('admin.questions.index') }}?exam={{$exam->id}}">Chi tiết</a>]</td>
            <td>
            @if($exam->status==1)
            <span class="label label-success">Mở</span>
            @else
            <span class="label label-danger">Đóng</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['admin.exams.destroy', $exam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.exams.show', [$exam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.exams.edit', [$exam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
