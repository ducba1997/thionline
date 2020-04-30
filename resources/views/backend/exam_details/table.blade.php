    <table class="ui celled table" id="examDetails-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id Exam</th>
        <th>Id Level Question</th>
        <th>Count</th>
        <th>Percent</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($examDetails as $examDetail)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $examDetail->id_exam }}</td>
            <td>{{ $examDetail->id_level_question }}</td>
            <td>{{ $examDetail->count }}</td>
            <td>{{ $examDetail->percent }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.examDetails.destroy', $examDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.examDetails.show', [$examDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.examDetails.edit', [$examDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
