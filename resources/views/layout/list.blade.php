@extends('components.sidebar')
@section('content-template')



<!DOCTYPE html>

<head>
    <title>@yield('title', 'My App')</title>
    <!-- <script src="../path/to/flowbite/dist/flowbite.js"></script> -->
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" >
    @vite(['resources/css/app.css','resources/js/app.js'])
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        @include('components.header')
        
</header>
    <div class="min-h-100 mb-5">
      <h1>List Produk</h1>
    </div>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>

    @endsection

    
</body>
</html>