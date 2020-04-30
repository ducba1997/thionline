    <table class="ui celled table" id="questions-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id Exam</th>
        <th>Id Level Question</th>
        <th>Content</th>
        <th>Correct Answer</th>
        <th>Answer 1</th>
        <th>Answer 2</th>
        <th>Answer 3</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($questions as $question)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $question->id_exam }}</td>
            <td>{{ $question->id_level_question }}</td>
            <td>{{ $question->content }}</td>
            <td>{{ $question->correct_answer }}</td>
            <td>{{ $question->answer_1 }}</td>
            <td>{{ $question->answer_2 }}</td>
            <td>{{ $question->answer_3 }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.questions.destroy', $question->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.questions.show', [$question->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.questions.edit', [$question->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
