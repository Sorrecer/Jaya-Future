<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ken-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/yap-style.css') }}">

    {{-- livewire --}}
    @livewireStyles

    <!-- Bootstraps Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- {{-- font --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <title>Plerr</title>
</head>

<body>

    @include('partials.nav-signup')

    <div class="sign-in container">
        <h2 class="fw-bold text-center mb-4 mt-5">Sign In</h2>

        <form class="mx-auto w-50">
            <div class="my-4">
                <div class="">
                    <label class="email" id="email">Email</label>
                    <input type="email" name="email" class="form-control " placeholder="Write Your Email" autocomplete="off">

                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="my-4">
                <div class="">
                    <label class="password" id="password">password<span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Your password" autocomplete="off">

                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>

    
    @livewireScripts
</body>

</html>
