<div class="col-xl-12">
    @if (Session('success'))
        <div class="alert alert-success mb-5" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
            {!! Session('success') !!}
        </div>
    @elseif (Session('warning')) 
        <div class="alert alert-warning mb-5" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
            {!! Session('warning') !!}
        </div>
    @elseif (Session('danger'))
        <div class="alert alert-danger mb-5" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
            {!! Session('danger') !!}
        </div>
    @endif
</div>