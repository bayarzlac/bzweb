@foreach ($productMenu as $item)
    <li class="m-dropdown-item">
        <a class="m-dropdown-link" href="{{ route('products', $item->id) }}">{{ $item->category }}</a>
        
        @if ($item->children->count() > 0)
            <ul class="m-subdropdown">
                @include('layouts.navProduct', ['productMenu' => $item->children])
            </ul>
        @endif
    </li>
@endforeach
