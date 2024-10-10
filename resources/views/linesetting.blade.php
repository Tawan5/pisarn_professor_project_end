@extends('layout')
@section('title')
    userpage
@endsection
@section('content')

<!-- หน้าสี่ -->
<main id="main" class="bg-white shadow-sm rounded p-3" style="max-width: 400px; margin: auto; margin-top: 20px; min-height: 90vh;">
    <section style="width: 100%;">
        <div class="container" style="margin-top: 20px;">
            <h4>ตั้งค่าไลน์</h4>
            <hr>
            <form class="d-flex flex-column justify-content-center align-items-center">
                <div class="" id="cew" style="background-color: #00C300;color: #ffffff; width: 210px; height: 210px; display: flex; justify-content: center; align-items: center;">
                    <h4>คิวอาร์โค้ด</h4>
                </div>
                <p style="margin-top: 10px;">สแกนคิวอานร์โค้ดนี้ เพื่อเข้าถึงไลน์แจ้งเตือนอัตโนมัติ</p>  
            </form>
            <hr>
            <div class="form-check form-switch">
                <label class="form-check-label" for="mySwitch">แจ้งเตือนผ่านไลน์</label>
                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
            </div>
        </div>
    </section>
</main>

@endsection
