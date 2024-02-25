@foreach ($mainmenu as $item)
    @if ($item->parent_id)
        <li class="m-dropdown-item">
            <a class="m-dropdown-link" href="#">{{ $item->title }}</a>
            
            @if ($item->children->count() > 0)
                <ul class="m-subdropdown">
                    @include('layouts.nav', ['mainmenu' => $item->children])
                </ul>
            @endif
        </li>
    @else
        <li class="m-item">
            <a class="m-link" href="#">{{ $item->title }}</a>

            @if ($item->children->count() > 0)
                <ul class="m-dropdown">
                    @include('layouts.nav', ['mainmenu' => $item->children])
                </ul>
            @endif
        </li>
    @endif
@endforeach
