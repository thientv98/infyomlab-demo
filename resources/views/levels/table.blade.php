<div class="table-responsive">
    <table class="table" id="levels-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Thumbnail</th>
        <th>Content</th>
        <th>Status</th>
        <th>Priority</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levels as $level)
            <tr>
                <td>{{ $level->title }}</td>
            <td><img src="{{Storage::url($level->thumbnail)}}" alt="" width="100px"></td>
            <td>{{ $level->content }}</td>
            <td>{{ $level->status }}</td>
            <td>{{ $level->priority }}</td>
                <td>
                    {!! Form::open(['route' => ['levels.destroy', $level->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levels.show', [$level->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('levels.edit', [$level->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
