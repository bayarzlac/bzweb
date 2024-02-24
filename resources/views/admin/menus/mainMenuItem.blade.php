@foreach ($menuItems as $menu)
    <tr>
        <td>
            {{ $menu->num }}
        </td>
        <td>
            {{ $menu->title }}
        </td>
        <td>
            {{ $menu->url }}
        </td>
    </tr>
    @if ($menu->children->count() > 0)
        @include('admin.menus.mainMenuItem', ['menuItems' => $menu->children])
    @endif
@endforeach