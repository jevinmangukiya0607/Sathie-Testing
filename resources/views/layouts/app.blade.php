<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Services') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr.min.css') }}">
    <script src="{{ asset('js/toggleMenu.js') }}"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    @yield('css')
    <script src="{{ asset('bootstrap-toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('bootstrap-toastr/ui-toastr.min.js') }}"></script>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all('<p>:message</p>') as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif


    @if(Session::has('success'))
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close">&times;</button>
            {!! Session::get('success') !!}
        </div>
    @elseif(Session::has('info'))
        <div class="alert alert-info">
            <button data-dismiss="alert" class="close">&times;</button>
            {!! Session::get('info') !!}
        </div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger">
            <button data-dismiss="alert" class="close">&times;</button>
            {!! Session::get('danger') !!}
        </div>
    @elseif(Session::has('warning'))
        <div class="alert alert-warning">
            <button data-dismiss="alert" class="close">&times;</button>
            {!! Session::get('warning') !!}
        </div>
    @endif
</head>

<body id="page-top">

    <!-- Navigation-->
    @include('layouts.navbar')

    @yield('content')

    
    
    <!-- footer -->

    @include('layouts.footer')
    @yield('footer')

    <!-- <script>
        $("div").click(function () {
            window.location = this.find("a").attr("href"); return false;
        });
    </script> -->
    <script>
        
    @if(\Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
    </script>
</body>

</html>



