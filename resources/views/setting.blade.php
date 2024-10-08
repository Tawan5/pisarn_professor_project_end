@extends('layout')
@section('title')
    หน้าแรก
@endsection
@section('content')

<!-- หน้าแรก -->
        <header id="header" class="d-flex justify-content-between align-items-center shadow-sm my-4 py-3 px-4"
            style="background-color: #97CADB; color:#001B4B;">
            <div class="d-flex align-items-center">
                <button style="width: 30px; height: 30px; border-radius: 50%; background-color: transparent; border: none; margin-right: 10px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-arrow-left-circle-fill" style="font-size: 30px; color: #001B4B;"></i>
                </button>
                <h1 class="fs-3 m-0">
                    การตั้งค่าตู้อบรมร้อน
                </h1>
            
            </div>
        </header>
            <main id="main" class="bg-white shadow-sm rounded">
                <section style="min-height: 80vh;">
                    <div class="p-4">
                        <h5>การแจ้งเตือน</h5>
                        <hr>
                        <div class="form-group">
                            <label style="margin-bottom: 10px; display: block;">แจ้งเตือนก่อนอบรมเสร็จสิ้น</label>
                            <div>
                                <input type="radio" id="10min" name="alertTime" value="10">
                                <label for="10min" style="margin-right: 15px;">10 นาที</label>
                            
                                <input type="radio" id="20min" name="alertTime" value="20">
                                <label for="20min" style="margin-right: 15px;">20 นาที</label>
                            
                                <input type="radio" id="30min" name="alertTime" value="30">
                                <label for="30min" style="margin-right: 15px;">30 นาที</label>
                            
                                <input type="radio" id="40min" name="alertTime" value="40">
                                <label for="40min" style="margin-right: 15px;">40 นาที</label>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </main>
            



@endsection