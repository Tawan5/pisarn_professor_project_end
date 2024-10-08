@extends('layout')
@section('title')
หน้าแสดงผลการทำงาน
@endsection
@section('content')

<!-- หน้าสอง -->
        <header id="header" class="d-flex justify-content-strat align-items-center shadow-sm my-4 py-3 px-4"
        style="background-color: #97CADB; color:#001B4B;">
          <a href="/">
            <button type="button" class="btn">
              <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem;"></i>
            </button>
          </a>
            <h1 class="fs-3 m-0">
                หน้าแสดงผลการทำงาน
            </h1>
        </header>
        <main id="main">
            <section class="bg-white rounded shadow-sm mb-4 p-4" id="chart">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fs-5">กราฟน้ำหนัก</h2>
                    <span class="fs-6">13:00 น.</span>
                </div>
                <div class="chart-container">
                <!-- Insert your chart code here (e.g., Chart.js or other) -->
                    <canvas id="weightChart" height="100">
                        
                    </canvas>
                </div>
                <div class="d-flex justify-content-end align-items-center mt-2">
                    <span>น้ำหนักของผลผลิตทั้งหมด</span>
                    <strong class="ms-2">2.34g</strong>
                </div>
            </section>
            <section class="row justify-content-between align-items-start">
            <!-- Left Column -->
                <div class="col-md-6" id="mornitor" style="float: left;width: 50%;">
                    <div class="text-center d-flex align-items-center bg-white rounded shadow-sm mb-4 p-3">
                        <i class="bi bi-thermometer-half fs-2 me-3"></i>
                        <p class="mb-0">อุณหภูมิ <strong>68°C</strong> องศาเซลเซียส</p>
                    </div>
                    <div class="text-center d-flex align-items-center bg-white rounded shadow-sm mb-4 p-3">
                        <i class="bi bi-droplet-half fs-2 me-3"></i>
                        <p class="mb-0">ความชื้นสัมพัทธ์ <strong>50%</strong></p>        
                    </div>
                    <div class="text-center d-flex align-items-center bg-white rounded shadow-sm mb-4 p-3 ">
                        <i class="bi bi-sun fs-2 me-3"></i>
                        <p class="mb-0">ความเข้มแสง <strong>369</strong> ลักซ์</p>                   
                    </div>
                </div>
            <!-- Right Column -->
                <div class="col-md-6 d-flex justify-content-center align-items-center" id="controllerrr"  style="float: right;width: 50%;">
                    <form action="/action_page.php" class="col-md-10 text-center bg-white rounded shadow-sm mb-4 p-5" style="width: 100%; max-width: 600px; height: 300px;">
                        <div class="form-check form-switch d-flex justify-content-between align-items-center">
                            <label class="form-check-label" for="mySwitch">เปิดปิดการทำงาน</label>
                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                        </div>
                        <div class="d-flex form-check form-switch justify-content-between align-items-center">
                            <p class="mb-0">สถานะการทำงาน</p>
                            <p class="mb-0">กำลังทำงาน</p>
                        </div>
                        <div class="justify-content-between">
                            <a href="history">
                              <button type="button" class="btn btn-primary mt-3 w-50 ">ข้อมูลย้อนหลัง</button>
                            </a>
                            <a href="setting">
                              <button type="button" class="btn btn-primary mt-3 w-50">การตั้งค่า</button>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!-- Chart.js Script -->
<script>
  const ctx = document.getElementById('weightChart').getContext('2d');
  const weightChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00'], // แกนเวลา (x-axis)
      datasets: [{
        label: 'น้ำหนัก',
        data: [10, 9, 8, 6, 4, 2], // ข้อมูลที่ใส่
        backgroundColor: 'rgba(54, 162, 235, 0.2)', // สีพื้นหลังใต้กราฟ
        borderColor: 'rgba(54, 162, 235, 1)', // สีของเส้นกราฟ
        fill: true, // แสดงสีใต้กราฟ
        pointBackgroundColor: 'rgba(0, 0, 0, 1)', // สีของจุด
        tension: 0.3 // ความโค้งของเส้นกราฟ
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true, // เริ่มจาก 0
          max: 10, // กำหนดค่า y สูงสุดที่ 10
          ticks: {
            stepSize: 2 // แสดงค่าทีละ 2
          },
          grid: {
            display: true, // แสดงเส้นกริดตามแนว Y
            color: 'rgba(0, 0, 0, 0.1)', // สีของเส้นกริด
            lineWidth: 1, // ความหนาของเส้นกริด
            drawBorder: true // แสดงเส้นกริดเฉพาะที่ขอบ
          }
        },
        x: {
          grid: {
            display: false // ซ่อนเส้นกริดตามแนว X
          }
        }
      }
    }
  });
</script>
        



@endsection