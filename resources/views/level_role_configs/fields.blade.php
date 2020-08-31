<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::select('level_id', $levelItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::select('role_id', $roleItems, null, ['class' => 'form-control']) !!}
</div>

<!-- From Point Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_point', 'From Point:') !!}
    {!! Form::number('from_point', null, ['class' => 'form-control']) !!}
</div>

<!-- End Point Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_point', 'End Point:') !!}
    {!! Form::number('end_point', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', 'Priority:') !!}
    {!! Form::number('priority', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('levelRoleConfigs.index') }}" class="btn btn-default">Cancel</a>
</div>
