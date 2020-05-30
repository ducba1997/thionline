    <table class="ui celled table" id="resultTests-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Bài thi</th>
        <th>Tài khoản</th>
        <th>Thời gian b.đầu</th>
        <th>Thời gian làm bài</th>
        <th>Điểm</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($resultTests as $resultTest)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $resultTest->idExam->name }}</td>
            <td>{{ $resultTest->idUser->name }}</td>
            <td>{{ $resultTest->time_start }}</td>
            <td>@if(!$resultTest->time_to_do) Chưa nạp bài @else {{ $resultTest->time_to_do }} giây @endif</td>
            <td>{{ $resultTest->point }} </td>
                <td>
                    {!! Form::open(['route' => ['admin.resultTests.destroy', $resultTest->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
