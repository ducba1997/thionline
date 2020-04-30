    <table class="ui celled table" id="exams-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id Grade</th>
        <th>Id Subject</th>
        <th>Id Chapter</th>
        <th>Id Users</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Password</th>
        <th>Time To Do</th>
        <th>Allow Review Answer</th>
        <th>Status</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($exams as $exam)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $exam->id_grade }}</td>
            <td>{{ $exam->id_subject }}</td>
            <td>{{ $exam->id_chapter }}</td>
            <td>{{ $exam->id_users }}</td>
            <td>{{ $exam->name }}</td>
            <td>{{ $exam->slug }}</td>
            <td>{{ $exam->description }}</td>
            <td>{{ $exam->password }}</td>
            <td>{{ $exam->time_to_do }}</td>
            <td>{{ $exam->allow_review_answer }}</td>
            <td>{{ $exam->status }}</td>
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
