    <table class="ui celled table" id="lessons-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
        <th>Slug</th>
        <th>Id Grade</th>
        <th>Id Subject</th>
        <th>Id Chapter</th>
        <th>Image</th>
        <th>Content</th>
        <th>Assignment</th>
        <th>Status</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($lessons as $lesson)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $lesson->name }}</td>
            <td>{{ $lesson->slug }}</td>
            <td>{{ $lesson->id_grade }}</td>
            <td>{{ $lesson->id_subject }}</td>
            <td>{{ $lesson->id_chapter }}</td>
            <td>{{ $lesson->image }}</td>
            <td>{{ $lesson->content }}</td>
            <td>{{ $lesson->assignment }}</td>
            <td>{{ $lesson->status }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.lessons.destroy', $lesson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
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
