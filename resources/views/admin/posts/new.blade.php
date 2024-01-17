@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Агуулга</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="transfer"></div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

<!-- INTERNAL jquery transfer js-->
<script src="{{ asset('admin_assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

<!-- MULTI SELECT JS-->
<script src="{{ asset('admin_assets/plugins/multipleselect/multiple-select.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/multipleselect/multi-select.js') }}"></script>

<!-- FORMELEMENTS JS -->
<script src="{{ asset('admin_assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-elements.js') }}"></script>
@endsection
