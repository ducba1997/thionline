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
    
    <table class="ui celled table" id="lessons-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
        <th>Khối</th>
        <th>Môn</th>
        <th>Chương</th>
        <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($lessons as $lesson)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $lesson->name }}</td>
            <td>{{ $lesson->idGrade->name }}</td>
            <td>{{ $lesson->idSubject->name }}</td>
            <td>{{ $lesson->idChapter->name }}</td>
            <td>
            @if($lesson->status==1)
            <span class="label label-success">Mở</span>
            @else
            <span class="label label-danger">Đóng</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['admin.lessons.destroy', $lesson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    <a href="{{ route('lesson', ['slug'=>$lesson->slug,'id'=>$lesson->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-list"></i></a>
                        <a href="{{ route('admin.lessons.show', [$lesson->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.lessons.edit', [$lesson->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
