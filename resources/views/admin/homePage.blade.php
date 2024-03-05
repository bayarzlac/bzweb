@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ангилал харагдац</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="">Толгойн хэсгийн текст</label>
                                    <input type="text" class="form-control" name="headerTitle"
                                        value="{{ $homePageData['header']['title'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Толгойн зураг</label>
                                    <input type="file" name="file" class="dropify" data-bs-height="180" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('storage/admin_assets/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/js/summernote.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('storage/admin_assets/js/form-validation-without-select.js') }}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('storage/admin_assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
@endsection
