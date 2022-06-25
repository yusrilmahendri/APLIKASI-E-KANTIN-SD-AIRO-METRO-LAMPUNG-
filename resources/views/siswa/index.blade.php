<!DOCTYPE html>
<html lang="en-US">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Kantin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="{{ asset('backend/css/font-awesome/css/all.min.css?ver=1.2.1') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/mdb.min.css?ver=1.2.1') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/aos.css?ver=1.2.1') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/main.css?ver=1.2.1') }}" rel="stylesheet">

    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>

  <body class="bg-light" id="top">
    
    <!-- navbar --> 
    @include('siswa.layouts.navbar')

    <!-- data profile pengguna --> 
    @include('siswa.layouts.data')

    <!-- menu --> 
    @include('siswa.layouts.menu')
    
    <!-- script and footer --> 
    @include('siswa.layouts.footer')
   
  </body>
</html>