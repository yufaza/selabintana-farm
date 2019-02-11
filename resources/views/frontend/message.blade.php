@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show fixed-top col-md-6 offset-md-3 animated" role="alert" data-animate="fadeDown">
        <strong>Peringatan!</strong> {{Session::get('warning')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show fixed-top col-md-6 offset-md-3 animated" role="alert" data-animate="fadeDown">
        <strong>Berhasil!</strong> {{Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show fixed-top col-md-6 offset-md-3 animated" role="alert" data-animate="fadeDown">
        <strong>Informasi!</strong> {{Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif