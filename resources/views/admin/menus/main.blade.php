@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Үндсэн цэс</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Цэс</th>
                                    <th>Холбоос</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.menus.mainMenuItem', ['menuItems' => $menuItems])
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Цэсэнд талбар нэмэх</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.menus.main.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Дэс дугаар</label>
                            <input type="text" name="num" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Цэс</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Дэд цэс болгох</label>
                            <select class="form-select form-control" name="parent_id">
                                <option selected value="">Сонгох...</option>
                                @foreach ($mainmenu as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == request('id') ? 'selected' : '' }}>{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Холбоос оруулах</label>
                            <input type="text" name="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Агуулга</label>
                            <textarea id="summernote" name="description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection
@section('scripts')
<script src="{{ asset('admin_assets/js/form-validation-with-select.js') }}"></script>

<!-- INTERNAL Edit-Table JS -->
<script src="{{ asset('admin_assets/plugins/edit-table/bst-edittable.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/edit-table/edit-table.js') }}"></script>

<!-- INTERNAL SUMMERNOTE Editor JS -->
<script src="{{ asset('admin_assets/plugins/summernote/summernote1.js') }}"></script>
<script src="{{ asset('admin_assets/js/summernote.js') }}"></script>
@endsection