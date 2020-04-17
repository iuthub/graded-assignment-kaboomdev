<div>
    @if(Session::has('info'))
        <div class="alert alert-success">
            {{ Session::get('info') }}
        </div>
    @endif
</div>