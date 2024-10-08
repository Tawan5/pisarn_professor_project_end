@extends('layout')
@section('title')
    userpage
@endsection
@section('content')

<!-- หน้าสี่ -->
<main id="main" class="bg-white shadow-sm rounded p-3" style="max-width: 400px; margin: auto; margin-top: 40px; display: flex; min-height: 90vh;">
    <section style="width: 100%;">
        <div class="container" style="margin-top: 20px;">
            <form>
                <h4>ตั้งค่าไลน์</h4>
                <hr>
                <div class="d-flex flex-column align-items-center justify-content-center" style="margin-top: 20px;">
                    <i class="bi bi-line" style="font-size: 50px; width: 70px; height: 70px; color: white; background-color: #07bd13; padding: 5px; border-radius: 20%; display: flex; align-items: center; justify-content: center;"></i>
                    <h5 style="color: #00C300; margin-top: 15px;">LINE MASSAGE</h5>
                    <a href=""><button class="btn custom-btn"
                    style="background-color: #00C300;color: #ffffff; padding: 10px 10px; font-size: 1.0rem; margin-top: 10px;">
                        เชื่อมต่อด้วยคิวอาร์โค้ด</button></a>
                </div>
                <hr>
                <div class="form-check form-switch d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="mySwitch">แจ้งเตือนผ่านไลน์</label>
                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection
