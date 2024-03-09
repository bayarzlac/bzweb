@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered key-buttons border-bottom">
                            <thead>
                                <th>№</th>
                                <th>
                                    Агуулга
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($widgets as $item)
                                    <tr>
                                        <td>
                                            {{ $item->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->widgetHtml }}
                                        </td>
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

@endsection