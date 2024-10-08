@extends('layout')
@section('title')
    userpage
@endsection
@section('content')

<!-- หน้าสี่ -->
<main id="main" class="bg-white shadow-sm rounded p-3" style="max-width: 400px; margin: auto; margin-top: 40px; display: flex; align-items: center; justify-content: center; min-height: 90vh;">
    <section style="width: 100%;">
        <div class="container">
            <form>
                <h5>หน้าชื่อผู้ใช้</h5>
                <hr>
                <!-- แก้ไขทั้งหมด -->
                <!-- Google Account -->
                <div class="d-flex">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-google" style="font-size: 20px;width: 30px; height: 30px; background-color: #e60012; color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; justify-content: center;"></i>
                        <div class="ms-2">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">บัญชีผู้ใช้</p>
                                <a href="login" class="text-primary">สลับบัญชี</a>
                            </div>
                            <p class="mb-0 text-secondary">Avenger Movel@gmail.com</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- LINE Account -->
                <div class="d-flex">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-line" style="font-size: 20px;width: 30px; height: 30px; color: white; background-color: #07bd13; padding: 5px; border-radius: 20%; display: flex; align-items: center; justify-content: center;"></i>
                        <div class="ms-2">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0" >บัญชีไลน์ผู้ใช้</p>
                                <a href="linesetting" class="ms-auto text-primary">ตั้งค่าไลน์ผู้ใช้</a>
                            </div>
                            <p class="mb-0 text-secondary">Singharach Nort Dakota</p>
                        </div>
                    </div>
                </div>

                <!-- Logout Button -->
                <div class="text-center" style="margin-top: 150px;">
                    <a href="login">
                        <button type="button" class="btn btn-danger">ออก</button>
                    </a>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection
