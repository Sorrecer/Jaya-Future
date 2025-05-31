<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
    <!-- logo web -->
    <link rel="shortcut icon" href="{{asset('logo/logo2.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
=======
    <link rel="stylesheet" href="{{ asset('css/ken-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/yap-style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
>>>>>>> b503214 (Membaut halaman home)

    <!-- Bootstraps Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
<<<<<<< HEAD
=======
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

>>>>>>> b503214 (Membaut halaman home)
    <title>Plerr</title>
</head>

<body>
<<<<<<< HEAD
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    @include('partials.navbar')



=======
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Hero --}}

    {{-- Konten kosong --}}
    <div class="main-content">
        {{-- Bisa ditambah konten di sini --}}
        @yield('container')
    </div>

    {{-- Footer --}}
    @include('components.footer')
>>>>>>> b503214 (Membaut halaman home)

</body>

</html>