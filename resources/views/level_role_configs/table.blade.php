<div class="table-responsive">
    <table class="table" id="levelRoleConfigs-table">
        <thead>
            <tr>
                <th>Level Id</th>
        <th>Role Id</th>
        <th>From Point</th>
        <th>End Point</th>
        <th>Status</th>
        <th>Priority</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levelRoleConfigs as $levelRoleConfig)
            <tr>
                <td>{{ $levelRoleConfig->level_id }}</td>
            <td>{{ $levelRoleConfig->role_id }}</td>
            <td>{{ $levelRoleConfig->from_point }}</td>
            <td>{{ $levelRoleConfig->end_point }}</td>
            <td>{{ $levelRoleConfig->status }}</td>
            <td>{{ $levelRoleConfig->priority }}</td>
                <td>
                    {!! Form::open(['route' => ['levelRoleConfigs.destroy', $levelRoleConfig->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levelRoleConfigs.show', [$levelRoleConfig->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('levelRoleConfigs.edit', [$levelRoleConfig->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
