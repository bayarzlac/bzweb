@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Бараа бүтээгдэхүүн нэмэх</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Барааны нэр</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="col-xl-2 mb-3">
                                <label>Барааны үнэ</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-8">
                                <textarea id="summernote" name="summernote"></textarea>
                            </div>
                            <div class="col-xl-4 px-5">
                                @include('admin.products.checkTree', ['categories' => $rootCategories])
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('admin_assets/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('admin_assets/js/summernote.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('admin_assets/js/form-validation-without-select.js') }}"></script>
@endsection
