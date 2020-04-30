    <table class="ui celled table" id="grades-table">
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
        @foreach($grades as $grade)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $grade->name }}</td>
            <td>{{ $grade->slug }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.grades.destroy', $grade->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.grades.show', [$grade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.grades.edit', [$grade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
