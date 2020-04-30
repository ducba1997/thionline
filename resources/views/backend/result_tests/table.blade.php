    <table class="ui celled table" id="resultTests-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id Exam</th>
        <th>Id User</th>
        <th>Time Start</th>
        <th>Time To Do</th>
        <th>Time Remaining</th>
        <th>Point</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($resultTests as $resultTest)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $resultTest->id_exam }}</td>
            <td>{{ $resultTest->id_user }}</td>
            <td>{{ $resultTest->time_start }}</td>
            <td>{{ $resultTest->time_to_do }}</td>
            <td>{{ $resultTest->time_remaining }}</td>
            <td>{{ $resultTest->point }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.resultTests.destroy', $resultTest->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.resultTests.show', [$resultTest->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.resultTests.edit', [$resultTest->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
