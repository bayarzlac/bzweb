@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Мэдээний ангилал</h4>
                </div>
                <div class="card-body px-5">
                    <ul class="list-style-1">
                        @include('admin.posts.tree', ['categories' => $rootCategories])
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилал нэмэх</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @include('admin.layouts.alert')
                    </div>

                    <form action="{{ route('admin.posts.categories.store') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label>Дэд цэс болгох</label>
                            <select name="main_id" class="form-control form-select select2">
                                <option value="" selected>--Сонгох</option>
                                @include('admin.posts.options', [ 'categories' => $rootCategories ])
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ангилал</label>
                            <input type="text" name="title" class="form-control" required>
                            <div class="invalid-feedback">Ангилал заавал бичнэ үү.</div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Хадгалах">
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Жагсаалт
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                            <thead>
                                <th>№</th>
                                <th>Ангилал</th>
                                <th>Үүссэн</th>
                                <th>#</th>
                            </thead>
                            <tbody>
                                @foreach ($allCategories as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->title }}</td>
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
    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('admin_assets/js/form-validation-with-select.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/select2.js') }}"></script>

    <!-- INTERNAL Edit-Table JS -->
    <script src="{{ asset('admin_assets/plugins/edit-table/bst-edittable.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/edit-table/edit-table.js') }}"></script>
@endsection