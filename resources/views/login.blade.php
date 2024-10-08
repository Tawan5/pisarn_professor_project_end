<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* กำหนดขนาดและระยะของหน้าเว็บและ body */
        body, html {
            height: 100%;
            margin: 0;
        }
        /* ตั้งค่ากลางหน้าสำหรับกล่องล็อกอิน */
        .login-container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #001B4B; /* สีพื้นหลัง */
        }
        /* ตั้งค่าสไตล์ของกล่องล็อกอิน */
        .login-card {
            text-align: center;
            padding: 20px;
            background-color: #001B4B;
            border-radius: 10px; /* มุมกล่องเป็นโค้ง */
        }
        /* ตั้งค่ารูปไอคอนผู้ใช้ */
        .login-card img {
            width: 80px;
            margin-bottom: 30px;
        }
        /* ตั้งค่าปุ่มล็อกอินด้วย Google */
        .google-btn {
            background-color: white;
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: #444;
            font-size: 16px;
        }
        /* ตั้งค่ารูปโลโก้ Google */
        .google-btn img {
            width: 20px;
            margin: 0px;
        }
        /* เมื่อเอาเมาส์ไปชี้ที่ปุ่ม Google */
        .google-btn:hover {
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <!-- ไอคอนผู้ใช้ -->
        <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="User Icon" class="rounded-circle">
        <!-- ปุ่มล็อกอินด้วย Google -->
        <a href="#" class="google-btn">
            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-icon-png-transparent-background-osteopathy-16.png" alt="Google Logo" style="margin-right: 10px;">
            <span>Login with Google</span>

        </a>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




