@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Агуулга</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @include('admin.layouts.alert')
                    </div>

                    <form action="{{ route('admin.post.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="title">Агуулгын гарчиг</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="short">Товч мэдээлэл</label>
                                    <input type="text" name="short" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-8 col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="content">Агуулга</label>
                                    <textarea id="summernote" name="content" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Агуулга хамаарах ангилал</label>
                                    @include('admin.posts.checkTree', ['categories' => $rootCategories])
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="header_image">Толгойн зураг</label>
                                    <input type="file" name="file" class="dropify" data-bs-height="180" />
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Хадгалах" class="btn btn-primary">
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

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('admin_assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INTERNAL jquery transfer js-->
    {{-- <script src="{{ asset('admin_assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script> --}}

    <!-- MULTI SELECT JS-->
    <script src="{{ asset('admin_assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/multipleselect/multi-select.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    {{-- <script src="{{ asset('admin_assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-elements.js') }}"></script> --}}
@endsection
