<ul>
    @foreach($projects as $project)
        <li>
            <a href="{{ route('ikomek.project-office.project', ['project_id' => $project->identifier]) }}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
</ul>

{{ $projects->links() }}