@if(\Illuminate\Support\Facades\Session::has('flash_message'))
    <script>
        swal({
            title: " {{Session::get('flash_message')}}",
            text:"هذه الرسالة سوف تختفي بعد 2 ثانية",
            timer: 2000,
            showConfirmButton: false
        });
    </script>
@endif
