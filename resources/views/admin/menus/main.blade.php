@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">hi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.menus.main.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Дэс дугаар</label>
                    <input type="text" name="num" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Цэс</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Дэд цэс болгох</label>
                    <select class="form-select form-control" name="parent_id">
                        <option selected value="">Сонгох...</option>
                        @foreach ($mainmenu as $item)
                            <option value="{{ $item->id }}" {{ $item->id == request('id') ? 'selected' : '' }}>{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" class="btn btn-primary" />
            </form>
        </div>
    </div>
    
@endsection
@section('scripts')
<script src="{{ asset('admin_assets/js/form-validation-with-select.js') }}"></script>

<!-- INTERNAL Edit-Table JS -->
<script src="{{ asset('admin_assets/plugins/edit-table/bst-edittable.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/edit-table/edit-table.js') }}"></script>
@endsection