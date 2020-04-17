    @if(Session::has('info'))
<div class="subheader">
    
        <div class="alert alert-success">
            {{ Session::get('info') }}
        </div>
</div>
        
    @endif