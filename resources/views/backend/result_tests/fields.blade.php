<!-- Id Exam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_exam', 'Id Exam:') !!}
    {!! Form::number('id_exam', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::number('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', 'Time Start:') !!}
    {!! Form::date('time_start', null, ['class' => 'form-control','id'=>'time_start']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#time_start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Time To Do Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_to_do', 'Time To Do:') !!}
    {!! Form::number('time_to_do', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Remaining Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_remaining', 'Time Remaining:') !!}
    {!! Form::number('time_remaining', null, ['class' => 'form-control']) !!}
</div>

<!-- Point Field -->
<div class="form-group col-sm-6">
    {!! Form::label('point', 'Point:') !!}
    {!! Form::number('point', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.resultTests.index') }}" class="btn btn-default">Đóng</a>
</div>
