<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body style="font-family: 'Figtree', Arial, Helvetica, sans-serif; background: #E1E1E1; line-height: 1.6;">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside id="sidebar" class="col-2 d-flex flex-column align-items-center py-4"
                style="background: #001B4B; color: #fff; position: fixed; height: 100vh; left: 0; top: 0;">
                @yield('sidebar')
            </aside>

            <!-- Main Content Area -->
            <div class="col offset-2 px-4">
                <!-- Header -->
                <header id="header" class="d-flex justify-content-between align-items-center shadow-sm my-4 py-3 px-4"
                    style="background-color: #97CADB; color:#001B4B;">
                    <h1 class="fs-3">เครื่องอบลมร้อนพลังงานแสงอาทิตย์</h1>
                </header>

                <!-- Main Section -->
                <main id="main" class="bg-white shadow-sm rounded">
                    <section  style="min-height: 80vh;">
                        <div class="Container">
                            <table class="table table-borderless align-middle text-center rounded"
                            style="border-radius: 15px;overflow: hidden;">
                            <thead class="table-light" style="background-color: #E1E1E1;">
                                <tr>
                                    <th scope="col">หมายเลข</th>
                                    <th scope="col">
                                        <i class="bi bi-train-lightrail-front text-dark fs-4"></i>
                                    </th>
                                    <th scope="col">สถานะ</th>
                                    <th scope="col">ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="handleRowClick(1)" style="cursor: pointer;">
                                    <td>1</td>
                                    <td><i class="bi bi-train-lightrail-front"></i></td>
                                    <td class="text-start">สถานะ: กำลังทำงาน</td>
                                    <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                </tr>
                                <tr onclick="handleRowClick(2)" style="cursor: pointer;">
                                    <td>2</td>
                                    <td><i class="bi bi-train-lightrail-front"></i></td>
                                    <td class="text-start">สถานะ: หยุดการทำงาน</td>
                                    <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                </tr>
                                <tr onclick="handleRowClick(3)" style="cursor: pointer;">
                                    <td>3</td>
                                    <td><i class="bi bi-train-lightrail-front"></i></td>
                                    <td class="text-start">สถานะ: กำลังทำงาน</td>
                                    <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr align="center">
                                    <td colspan="5">
                                    <i class="bi bi-plus-circle-fill"
                                    style="position: absolute; bottom: 10px; transform: translateX(-50%); color: #001B4B;"></i>
                                    </td>
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
