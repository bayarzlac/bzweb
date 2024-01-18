<ul class="list-style-1" style="list-style: none;">    
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('admin.products', $category->id) }}">{{ $category->num }}. {{ $category->category }}</a>
            @if ($category->children->count() > 0)
                @include('admin.products.categorize', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>