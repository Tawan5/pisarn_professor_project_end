@extends('layout')
@section('title')
    หน้าแรก
@endsection
@section('content')

<!-- หน้าแรก -->
        <header id="header" class="d-flex justify-content-between align-items-center shadow-sm my-4 py-3 px-4"
        style="background-color: #97CADB; color:#001B4B;">
            <h1 class="fs-3">
                ตู้อบรมร้อน
            </h1>
        </header>
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
                        <tr style="cursor: pointer;">
                            <td>1</td>
                            <td>                                    
                                <i class="bi bi-train-lightrail-front"></i>
                            </td>
                            <td class="text-start">สถานะ: กำลังทำงาน</td>
                            <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                        </tr>                               
                         <tr style="cursor: pointer;">
                            <td>2</td>
                            <td><i class="bi bi-train-lightrail-front"></i></td>
                            <td class="text-start">สถานะ: หยุดการทำงาน</td>
                            <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                        </tr>
                        <tr style="cursor: pointer;">
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



@endsection