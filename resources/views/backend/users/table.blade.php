    <table class="ui celled table" id="users-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
        <th>Email</th>
        <th>Giới tính</th>
        <th>Quyền</th>
        <th>Địa chỉ</th>
        <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php $stt=0; ?>
        @foreach($users as $users)
            <tr>
            <td>{{++$stt}}</td>
                <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->idGender->name }}</td>
            <td>{{ $users->idPermission->name }}</td>
            <td>{{ $users->address }}</td>
            <td>
            @if($users->active==1)
            <span class="label label-success">Mở</span>
            @else
            <span class="label label-danger">Đóng</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['admin.users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.users.show', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.users.edit', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Bạn có chắc chắn không?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
