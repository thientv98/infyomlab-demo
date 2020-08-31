<div class="table-responsive">
    <table class="table" id="quizzes-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Role Id</th>
        <th>Code</th>
        <th>Result</th>
        <th>Status</th>
        <th>Priority</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->user_id }}</td>
            <td>{{ $quiz->role_id }}</td>
            <td>{{ $quiz->code }}</td>
            <td>{{ $quiz->result }}</td>
            <td>{{ $quiz->status }}</td>
            <td>{{ $quiz->priority }}</td>
                <td>
                    {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('quizzes.show', [$quiz->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('quizzes.edit', [$quiz->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
