<div class="table-responsive">
    <table class="table" id="staticContents-table">
        <thead>
            <tr>
                <th>Key</th>
        <th>Title</th>
        <th>Content</th>
        <th>Status</th>
        <th>Priority</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($staticContents as $staticContent)
            <tr>
                <td>{{ $staticContent->key }}</td>
            <td>{{ $staticContent->title }}</td>
            <td>{{ $staticContent->content }}</td>
            <td>{{ $staticContent->status }}</td>
            <td>{{ $staticContent->priority }}</td>
                <td>
                    {!! Form::open(['route' => ['staticContents.destroy', $staticContent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('staticContents.show', [$staticContent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('staticContents.edit', [$staticContent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
