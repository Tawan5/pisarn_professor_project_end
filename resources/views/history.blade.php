@extends('layout')
@section('title')
การทำงานย้อนหลัง
@endsection
@section('content')

<!-- หน้าสาม -->
        <header id="header" class="d-flex justify-content-strat align-items-center shadow-sm my-4 py-3 px-4"
          style="background-color: #97CADB; color:#001B4B;">
            <a href="display">
              <button type="button" class="btn">
                <i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem;"></i>
              </button>
            </a>
            <h1 class="fs-3 m-0">
                การทำงานย้อนหลัง
            </h1>
        </header>
        <main id="main">
            <section class="bg-white rounded shadow-sm mb-4 p-2">
                <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-link text-primary"><i class="bi bi-chevron-double-left"></i></button>
                    <button class="btn btn-link text-primary"><i class="bi bi-chevron-left"></i></button>
                    <span class="mx-3 fw-bold">29/07/2024</span>
                    <button class="btn btn-link text-primary"><i class="bi bi-chevron-right"></i></button>
                    <button class="btn btn-link text-primary"><i class="bi bi-chevron-double-right"></i></button>
                </div>
            </section>
            <!-- weight -->
            <section class="bg-white rounded shadow-sm mb-4 p-4" id="chart">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">น้ำหนักผลิตภัณฑ์ 2.34 กรัม</h3>
                </div>
                <div class="chart-container">
                    <canvas id="weightChart" height="60"></canvas>
                </div>
            </section>
            <!-- temp -->
            <section class="bg-white rounded shadow-sm mb-4 p-4" id="chart">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">อุณหภูมิความร้อน 68 องศาเซลเซียส</h3>
                </div>
                <div class="chart-container">
                    <canvas id="tempChart"  height="60"></canvas>
                </div>
            </section>
            <!-- humidity -->
            <section class="bg-white rounded shadow-sm mb-4 p-4" id="chart">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">ความชื้นภายใน 58% ความชื้นสัมพัทธ์</h3>
                </div>
                <div class="chart-container">
                    <canvas id="humidityChart"  height="60"></canvas>
                </div>
            </section>
            <!-- sunlight -->
            <section class="bg-white rounded shadow-sm mb-4 p-4" id="chart">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">ความเข้มของแสงแดด 395 ลักซ์</h3>
                </div>
                <div class="chart-container">
                    <canvas id="sunlightChart"  height="60"></canvas>
                </div>
            </section>
        </main>

        <script>
    // Data for charts
    const timeLabels = ['09:00', '10:00', '11:00', '12:00', '13:00'];

    // Options for all charts
    const chartOptions = {
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            drawBorder: true,   // Show left Y axis border
            drawOnChartArea: true, // Enable horizontal grid lines
            color: 'rgba(0, 0, 0, 0.1)' // Set color for grid lines
          }
        },
        x: {
          display: false // Remove X axis
        }
      }
    };

    // Weight Chart
    const weightCtx = document.getElementById('weightChart').getContext('2d');
    new Chart(weightCtx, {
      type: 'line',
      data: {
        labels: timeLabels,
        datasets: [{
          label: 'Weight (g)',
          data: [2.8, 2.6, 2.5, 2.4, 2.34],
          fill: true,
          backgroundColor: 'rgba(173, 216, 230, 0.2)',
          borderColor: 'rgba(173, 216, 230, 1)',
          borderWidth: 1
        }]
      },
      options: chartOptions
    });

    // Temperature Chart
    const tempCtx = document.getElementById('tempChart').getContext('2d');
    new Chart(tempCtx, {
      type: 'line',
      data: {
        labels: timeLabels,
        datasets: [{
          label: 'Temperature (°C)',
          data: [45, 50, 60, 65, 68],
          fill: true,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: chartOptions
    });

    // Humidity Chart
    const humidityCtx = document.getElementById('humidityChart').getContext('2d');
    new Chart(humidityCtx, {
      type: 'line',
      data: {
        labels: timeLabels,
        datasets: [{
          label: 'Humidity (%)',
          data: [60, 62, 58, 55, 58],
          fill: true,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: chartOptions
    });

    // Sunlight Intensity Chart
    const sunlightCtx = document.getElementById('sunlightChart').getContext('2d');
    new Chart(sunlightCtx, {
      type: 'line',
      data: {
        labels: timeLabels,
        datasets: [{
          label: 'Sunlight Intensity (Lux)',
          data: [300, 350, 390, 370, 395],
          fill: true,
          backgroundColor: 'rgba(255, 206, 86, 0.2)',
          borderColor: 'rgba(255, 206, 86, 1)',
          borderWidth: 1
        }]
      },
      options: chartOptions
    });
  </script>






@endsection