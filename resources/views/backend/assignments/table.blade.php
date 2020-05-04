<div>
    <?php
    $gradeItems = App\Models\Manage\Grade::all()->pluck('name', 'id');
    $subjectItems = App\Models\Manage\Subject::all()->pluck('name', 'id');
    $chapterItems = App\Models\Manage\Chapter::all()->pluck('name', 'id');
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
   <table class="ui celled table" id="assignments-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Khối</th>
                <th>Lớp</th>
                <th>Chương</th>
                <th>Link tải</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0; ?>
            @foreach($assignments as $assignment)
            <tr>
                <td>{{++$stt}}</td>
                <td>{{ $assignment->name }}</td>
                <td>{{ $assignment->idGrade->name }}</td>
                <td>{{ $assignment->idSubject->name }}</td>
                <td>{{ $assignment->idChapter->name }}</td>
                <td><a href="{{route('assignment.download',$assignment->id)}}">Tải về</a></td>
                <td>@if($assignment->status==1)
                    <span class="label label-success">Mở</span>
                    @else
                    <span class="label label-danger">Đóng</span>
                    @endif</td>
                <td>
                    {!! Form::open(['route' => ['admin.assignments.destroy', $assignment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.assignments.show', [$assignment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.assignments.edit', [$assignment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>