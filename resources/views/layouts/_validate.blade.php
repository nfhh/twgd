@foreach($errors->all() as $error)
    <div class="alert alert-danger mt-3">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endforeach

