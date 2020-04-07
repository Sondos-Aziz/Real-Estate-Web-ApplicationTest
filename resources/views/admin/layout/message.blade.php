@if(\Illuminate\Support\Facades\Session::has('flash_message'))
    <div class="container">
        <br>
        <div class="alert alert-danger" id="mes">
            {{\Illuminate\Support\Facades\Session::get('flash_message')}}
        </div>
    </div>
@endif
