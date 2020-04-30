    <table class="ui celled table" id="levelQuestions-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($levelQuestions as $levelQuestion)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $levelQuestion->name }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.levelQuestions.destroy', $levelQuestion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.levelQuestions.show', [$levelQuestion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.levelQuestions.edit', [$levelQuestion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
