<ul>    
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('admin.products.categories', $category->id) }}">{{ $category->category }}</a>
            @if ($category->children->count() > 0)
                @include('admin.products.tree', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>
