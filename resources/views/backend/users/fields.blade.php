<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Tên:') !!}
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
    {!! Form::label('id_gender', 'Giới tính:') !!}
    {!! Form::select('id_gender',$genderItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Permission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_permission', 'Quyền:') !!}
    {!! Form::select('id_permission',$permissionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('avatar', 'Ảnh:') !!}
    <input type="file" id="avatar" name="avatar" accept=".png, .jpg, .jpeg">
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Ngày sinh:') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#birthday').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Địa chỉ:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mật khẩu:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Trạng thái:') !!}
    {!! Form::select('active',$stt, null, ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Đóng</a>
</div>
