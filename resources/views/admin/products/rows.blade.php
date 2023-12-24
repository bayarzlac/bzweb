@foreach ($categories as $category)
    <tr>
        <td>
            {{ $category->num }}
        </td>
        <td>
            {{ $category->category }}
        </td>
        <td>
            {{ $category->description }}
        </td>
    </tr>
    @if ($category->children->count() > 0)
        @include('admin.products.rows', ['categories' => $category->children])
    @endif
@endforeach
