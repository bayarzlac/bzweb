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
                    <div class="row">
                        @include('admin.layouts.alert')
                    </div>

                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" 
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-xl-8">
                                <div class="form-row">
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Барааны нэр</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Барааны үнэ</label>
                                            <input type="number" class="form-control" name="price" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Барааны дэлгэрэнгүй мэдээлэл</label>
                                            <textarea id="summernote" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 px-5">
                                <div class="form-group">
                                    <label class="form-label">Хамаарах ангилал</label>
                                    @include('admin.products.checkTree', ['categories' => $rootCategories])
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Барааны зургууд</label>
                                    <input id="demo" type="file" name="files[]" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Хадгалах</button>
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

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('admin_assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{ asset('admin_assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

    <!-- INTERNAL Sumoselect js-->
    {{-- <script src="{{ asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script> --}}

    <!-- INTERNAL multi js-->
    {{-- <script src="{{ asset('admin_assets/plugins/multi/multi.min.js') }}"></script> --}}

    <!-- FORMELEMENTS JS -->
    {{-- <script src="{{ asset('admin_assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ asset('admin_assets/js/form-elements.js') }}"></script> --}}
@endsection
