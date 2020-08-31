<div class="table-responsive">
    <table class="table" id="answers-table">
        <thead>
            <tr>
                <th>Question Id</th>
        <th>Title</th>
        <th>Is Correct</th>
        <th>Status</th>
        <th>Priority</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($answers as $answer)
            <tr>
                <td>{{ $answer->question_id }}</td>
            <td>{{ $answer->title }}</td>
            <td>{{ $answer->is_correct }}</td>
            <td>{{ $answer->status }}</td>
            <td>{{ $answer->priority }}</td>
                <td>
                    {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('answers.show', [$answer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('answers.edit', [$answer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
