@foreach ($categories as $item)
    <option value="{{ $item->id }}" {{ $item->id = request()->id ? 'selected' : '' }}>{{ $item->title }}</option>
    @if ($item->children->count() > 0)
        @include('admin.posts.options', [ 'categories' => $item->children ])
    @endif
@endforeach
