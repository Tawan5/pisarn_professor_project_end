<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="font-family: 'Figtree', Arial, Helvetica, sans-serif; background: #E1E1E1; line-height: 1.6;">
    <aside id="sidebar" class="col-2 d-flex flex-column align-items-center py-4"
    style="background: #001B4B; color: #fff; position: fixed; height: 100vh; left: 0; top: 0;">
        <h2 class="d-flex justify-content-center align-items-center" style="margin-bottom: 20px; font-size: 70px;"><i class="bi bi-backpack2-fill"></i></h2>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="userpage" class="nav-link text-white d-flex align-items-center p-2 rounded-3">
                        <i class="bi bi-person-circle me-2"></i> 
                        ชื่อบัญชีผู้ใช้
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/" class="nav-link text-white d-flex align-items-center p-2 rounded-3">
                        <i class="bi bi-house-door-fill me-2"></i> 
                        หน้าหลัก
                    </a>
                </li>
            </ul>
    </aside>
    <div  class="col offset-2 px-4">
        @yield('content')
    </div>
    <!-- Bootstrap 5 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
