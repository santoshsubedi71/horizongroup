<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>{{ trans('panel.site_title') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>horizon-group</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    </head>
    <body>
    @include('partials.header')

       
         @yield('welcome')
     

    @include('partials.footer')

         <!-- jQuery -->
    <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('/js/popper.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    
    <!-- Plugins -->
    <script src="{{ asset('/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }} "></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('/js/mixitup.js') }}"></script> 
    <script src="{{ asset('/js/accordions.js') }}"></script>
    
    <!-- Global Init -->
    <script src=" {{ asset('/js/custom.js') }}"></script>
    </body>
</html>