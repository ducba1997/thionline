    <table class="ui celled table" id="chapters-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
        <th>Slug</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($chapters as $chapter)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $chapter->name }}</td>
            <td>{{ $chapter->slug }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.chapters.destroy', $chapter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.chapters.show', [$chapter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.chapters.edit', [$chapter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
