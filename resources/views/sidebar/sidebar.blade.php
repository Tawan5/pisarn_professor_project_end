@extends('welcome')

@section('sidebar')
    <h2 class="d-flex justify-content-center align-items-center" style="margin-bottom: 20px; font-size: 70px;"><i class="bi bi-backpack2-fill"></i></h2>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#analytics" class="nav-link text-white d-flex align-items-center p-2 rounded-3">
                    <i class="bi bi-person-circle me-2"></i> 
                    ชื่อบัญชีผู้ใช้
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#settings" class="nav-link text-white d-flex align-items-center p-2 rounded-3">
                    <i class="bi bi-house-door-fill me-2"></i> 
                    หน้าหลัก
                </a>
            </li>
        </ul>

@endsection
