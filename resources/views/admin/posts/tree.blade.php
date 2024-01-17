
<ul class="list-style-1">
    @foreach ($categories as $item)
        <li>
            {{ $item->title }}
            @if ($item->children->count() > 0)
                @include('admin.posts.tree', ['categories' => $item->children])
            @endif
        </li>
    @endforeach
</ul>