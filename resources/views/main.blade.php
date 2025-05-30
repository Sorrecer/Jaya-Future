<!-- resources/views/main.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/ken-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/yap-style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    {{-- Konten kosong --}}
    <div class="main-content">
        {{-- Bisa ditambah konten di sini --}}
    </div>

    {{-- Footer --}}
    @include('components.footer')

</body>

</html>