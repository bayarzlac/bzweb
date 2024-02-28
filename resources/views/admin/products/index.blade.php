@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилал</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.products') }}">Бүгд</a>
                    @include('admin.products.categorize', ['categories' => $rootCategories])
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Бараа бүтээгдэхүүний жагсаалт</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Нэр</th>
                                    <th>Үнэ</th>
                                    <th>Бүртгэгдсэн</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- INTERNAL Edit-Table JS -->
    <script src="{{ asset('storage/admin_assets/plugins/edit-table/bst-edittable.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/edit-table/edit-table.js') }}"></script>
@endsection
