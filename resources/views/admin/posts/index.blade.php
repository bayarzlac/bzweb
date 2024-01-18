@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Жагсаалт</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Гарчиг</th>
                                    <th>Толгойн зураг</th>
                                    <th>Үүсэн</th>
                                    <th>Зассан</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->index + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            {{ $item->header_img_path ? 'Зурагтай' : 'Зураггүй' }}
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>{{ $item->id }}</td>
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
    <!-- DATA TABLE JS-->
    <script src="{{ asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/table-data.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/form-validation.js') }}"></script>
@endsection