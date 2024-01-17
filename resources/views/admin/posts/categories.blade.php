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
        </div>
        <div class="col-md-12 col-xl-4">
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
                        <input type="text" name="main_id">
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
    </div>
@endsection
@section('scripts')
    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('admin_assets/js/form-validation-without-select.js') }}"></script>
@endsection