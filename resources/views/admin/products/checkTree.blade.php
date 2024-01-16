<ul class="list-style-1" style="list-style-type: none;">    
    @foreach ($categories as $category)
        <li>
            <label class="custom-control custom-checkbox-sm">
                <input type="checkbox" class="custom-control-input" name="categories[]" value="{{ $category->id }}">
<<<<<<< HEAD
                <span class="custom-control-label">{{ $category->num }}. {{ $category->category }}</span>
=======
                <span class="custom-control-label">{{ $category->category }}</span>
>>>>>>> e68eb9ddadbe52a4063fd58e34a6c6df08fc19dc
            </label>
            
            @if ($category->children->count() > 0)
                @include('admin.products.checkTree', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>