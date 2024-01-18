<ul class="list-style-1" style="list-style-type: none;">    
    @foreach ($categories as $category)
        <li>
            <label class="custom-control custom-checkbox-sm">
                <input type="checkbox" class="custom-control-input" name="categories[]" value="{{ $category->id }}">
                <span class="custom-control-label">{{ $category->title }}</span>
            </label>
            
            @if ($category->children->count() > 0)
                @include('admin.posts.checkTree', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>