@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Агуулга</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.widgets.createOrUpdate') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Агуулга HTML (Bootstrap)</label>
                                    <textarea id="summernote" name="widgetHtml" class="codeview" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="submit" value="Хадгалах" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('storage/admin_assets/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/js/summernote.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('storage/admin_assets/js/form-validation-without-select.js') }}"></script>
@endsection
