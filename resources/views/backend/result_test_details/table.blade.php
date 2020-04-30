    <table class="ui celled table" id="resultTestDetails-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id Result Test</th>
        <th>Id Question</th>
        <th>Answer</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($resultTestDetails as $resultTestDetail)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $resultTestDetail->id_result_test }}</td>
            <td>{{ $resultTestDetail->id_question }}</td>
            <td>{{ $resultTestDetail->answer }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.resultTestDetails.destroy', $resultTestDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.resultTestDetails.show', [$resultTestDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.resultTestDetails.edit', [$resultTestDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
