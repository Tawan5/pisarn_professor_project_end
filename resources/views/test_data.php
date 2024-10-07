<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sensor_db";

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($hostname, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if(!$conn){
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
}

echo "เชื่อมต่อฐานข้อมูลสำเร็จ<br>";

if(isset($_POST["temperature"]) && isset($_POST["humidity"])) {

    // แสดงข้อมูลที่ได้รับจาก ESP32
    echo "ข้อมูลที่ได้รับจาก POST:<br>";
    var_dump($_POST);
    echo "<br>";
    
    // ใช้ prepared statement เพื่อความปลอดภัย
    $stmt = $conn->prepare("INSERT INTO dht21 (temperature, humidity) VALUES (?, ?)");
    $stmt->bind_param("dd", $t, $h);

    // กำหนดค่าตัวแปรจาก POST
    $t = $_POST["temperature"];
    $h = $_POST["humidity"];

    // รันคำสั่ง SQL
    if ($stmt->execute()){
        echo "บันทึกข้อมูลใหม่สำเร็จ";
    } else {
        echo "ข้อผิดพลาด: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ไม่ได้รับข้อมูลหรือพารามิเตอร์ไม่ครบ!";
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM dht21";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br>ข้อมูลในฐานข้อมูล:<br>";
} else {
    echo "<br>ไม่มีข้อมูลในฐานข้อมูล<br>";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">อุณหภูมิ</th>
      <th scope="col">ความชื้น</th>
      <th scope="col">เวลา</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){ ?>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['temperature']; ?></td>
          <td><?php echo $row['humidity']; ?></td>
          <td><?php echo $row['datetime']; ?></td>
        </tr>
    <?php } } ?>
  </tbody>
</table>
</body>
</html>
