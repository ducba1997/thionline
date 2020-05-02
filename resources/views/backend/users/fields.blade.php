<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Gender Field -->
<?php

use App\Models\Manage\Gender;
use App\Models\Manage\Permission;

$genderItems= Gender::all()->pluck('name','id');
$permissionItems=Permission::all()->pluck('name','id');
$stt=array(
    '1'=>'Hoạt động',
    '0'=>'Không hoạt động' 
);
?>
<div class="form-group col-sm-6">
    {!! Form::label('id_gender', 'Id Gender:') !!}
    {!! Form::select('id_gender',$genderItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Permission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_permission', 'Id Permission:') !!}
    {!! Form::select('id_permission',$permissionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::textarea('avatar', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Birthday:') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#birthday').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::select('active',$stt, null, ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Đóng</a>
</div>
