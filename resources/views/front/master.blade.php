<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    
    @stack('css')
  </head>
  @include('front.header')
  <body>
    @yield('content')
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyV2kW2THN67ph5vTH1/zIY9q2+gMo7PLDfX5Y7W6rg+7hDfgAD+e+o5AsMwXObP" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-7LgqqBq9HQY0YpAaxGqT0wTVZ0LH8o2jnTNNfgCjbmJlRjHNz2xhORtj2pES8FrH" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js" integrity="sha384-uTb1IJ9nMbxERiNGf+hZkMhO6sxEp8n7Mz4itqtvb+HPRlmW/LrhtEx3C+oJjq2i" crossorigin="anonymous"></script>
    @stack('js')
  </body>
  @include('front.footer')
  
</html>



