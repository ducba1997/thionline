@if(Request::get('exam'))
<?php $examItems = App\Models\Manage\Exam::where('id', Request::get('exam'))->first() ?>
<div class="pull-left" style="margin-left: 10px">
    <a class="btn btn-success" href="{{route('admin.questions.importGet')}}?exam={{Request::get('exam')}}"><i class="fa fa-file-excel-o"></i>&nbspNhập câu hỏi file từ Excel</a>
</div>
@else
<div class="pull-left" style="margin-left: 10px">
    <a class="btn btn-success" href="{{route('admin.questions.importGet')}}"><i class="fa fa-file-excel-o"></i>&nbspNhập câu hỏi file từ Excel</a>
</div>
@endif

<table class="ui celled table" id="questions-table">
    <thead>
        <tr>
            <th>STT</th>
            @if(!Request::get('exam'))
            <th>Tên đề thi</th>
            @endif
            <th>Mức độ câu hỏi</th>
            <th>Nội dung</th>
            <th>Đáp án đúng</th>
            <th>Đáp án 1</th>
            <th>Đáp án 2</th>
            <th>Đáp án 3</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($questions as $question)
        <tr>
            <td>{{++$stt}}</td>
            @if(!Request::get('exam'))
            <td>{{ $question->idExam->name }}</td>
            @endif
            <td>{{ $question->idLevelQuestion->name }}</td>
            <td>{{ $question->content }}</td>
            <td>{{ $question->correct_answer }}</td>
            <td>{{ $question->answer_1 }}</td>
            <td>{{ $question->answer_2 }}</td>
            <td>{{ $question->answer_3 }}</td>
            <td>
                @if(Request::get('exam'))
                {!! Form::open(['route' => ['admin.questions.destroy', 'id'=>$question->id,'exam'=>Request::get('exam')], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('admin.questions.show', [$question->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ route('admin.questions.edit', [$question->id]) }}?exam={{Request::get('exam')}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                </div>
                @else
                {!! Form::open(['route' => ['admin.questions.destroy', 'id'=>$question->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('admin.questions.show', [$question->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ route('admin.questions.edit', [$question->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                </div>
                @endif

                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>