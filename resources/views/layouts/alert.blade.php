@if(session('message'))
    <script>
        notify("{{session('message')}}");
    </script>
@endif