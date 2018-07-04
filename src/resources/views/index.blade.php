<ul>
@foreach($categories as $category)
    <li>
        <a href="{{ route('ikomek.project-office.category', ['category_id' => $category->id]) }}">
            {{ $category->title }}
        </a>
    </li>
@endforeach
</ul>