
<ul class="list-style-1">
    @foreach ($categories as $item)
        <li>
            <a href="{{ route('admin.posts.categories', $item->id) }}">{{ $item->title }}</a>
            
            @if ($item->children->count() > 0)
                @include('admin.posts.tree', ['categories' => $item->children])
            @endif
        </li>
    @endforeach
</ul>