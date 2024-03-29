@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилал харагдац</h4>
                </div>
                <div class="card-body">
                    <div class="dTree">
                        <ul>
                            <li>Барааны ангилал</li>
                            @include('admin.products.tree', ['categories' => $rootCategories])
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилал нэмэх / засах</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.categories.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="">
                            <input name="parent_id" type="hidden" value="{{ request('id') }}" />
                            <div class="form-group">
                                <label class="form-label">Хамааруулах ангилал</label>
                                <select class="form-select form-control" name="parent_id">
                                    <option selected value="">Сонгох...</option>
                                    @foreach ($allCategories as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == request('id') ? 'selected' : '' }}>{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Дэс дугаар</label>
                                <input type="number" name="num" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ангилал</label>
                                <input type="text" name="category" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Тайлбар, нэмэлт мэдээлэл</label>
                                <input type="text" name="description" class="form-control" />
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 mb-0">Нэмэх</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилалын жагсаалт</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ангилал</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.products.rows', ['categories' => $rootCategories])
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Internal Dtree Treeview js -->
    <script src="{{ asset('storage/admin_assets/plugins/dtree/dtree.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/dtree/dtree1.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/js/form-validation-with-select.js') }}"></script>

    <!-- INTERNAL Edit-Table JS -->
    <script src="{{ asset('storage/admin_assets/plugins/edit-table/bst-edittable.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/edit-table/edit-table.js') }}"></script>
@endsection