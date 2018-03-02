@if (($message = session('message')) && ($category = session('category')))
<div class="alert-flash alert alert-{{ $category }} alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif