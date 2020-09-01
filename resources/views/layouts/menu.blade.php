<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('levels*') ? 'active' : '' }}">
    <a href="{{ route('levels.index') }}"><i class="fa fa-edit"></i><span>Levels</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('staticContents*') ? 'active' : '' }}">
    <a href="{{ route('staticContents.index') }}"><i class="fa fa-edit"></i><span>Static Contents</span></a>
</li>

<li class="{{ Request::is('questions*') ? 'active' : '' }}">
    <a href="{{ route('questions.index') }}"><i class="fa fa-edit"></i><span>Questions</span></a>
</li>

<li class="{{ Request::is('answers*') ? 'active' : '' }}">
    <a href="{{ route('answers.index') }}"><i class="fa fa-edit"></i><span>Answers</span></a>
</li>

<li class="{{ Request::is('levelRoleConfigs*') ? 'active' : '' }}">
    <a href="{{ route('levelRoleConfigs.index') }}"><i class="fa fa-edit"></i><span>Level Role Configs</span></a>
</li>

<li class="{{ Request::is('quizzes*') ? 'active' : '' }}">
    <a href="{{ route('quizzes.index') }}"><i class="fa fa-edit"></i><span>Quizzes</span></a>
</li>

