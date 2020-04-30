    <table class="ui celled table" id="users-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Id Gender</th>
        <th>Id Permission</th>
        <th>Avatar</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Password</th>
        <th>Remember Token</th>
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
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->id_gender }}</td>
            <td>{{ $users->id_permission }}</td>
            <td>{{ $users->avatar }}</td>
            <td>{{ $users->birthday }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->remember_token }}</td>
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
