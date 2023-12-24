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
                        </div>
                        <div class="form-row">
                            <div class="col-xl-8">
                                <textarea id="summernote" name="summernote"></textarea>
                            </div>
                            <div class="col-xl-4 px-5">
                                <ul class="list-style-1">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>
                                        <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" checked>
                                            <span class="custom-control-label">Option 1</span>
                                        </label>
                                    </li>
                                </ul>
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
