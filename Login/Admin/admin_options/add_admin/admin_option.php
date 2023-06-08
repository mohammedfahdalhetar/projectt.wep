<!DOCTYPE html>
<html>
<head>
	<title>عرض بيانات الجدول</title>
	<link rel="stylesheet" href="../../../../css/bootstrap.css">
	<link rel="stylesheet" href="../../../../css/option.css">

	
</head>
<body>
	<div class="container">
		<h2>جدول المستخدمين</h2>
		<table class="table table-striped blue-white">
			<thead>
      <tr><th>ID</th><th>NAME</th><th>ADMIN_NAME</th><th>EMAIL </th><th>PASSWORD </th>
            </tr>
			</thead>
			<tbody>
<?php
// إنشاء الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melion";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق إذا تم الاتصال بنجاح
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

		// استعراض جميع البيانات من الجدول
		$sql = "SELECT * FROM admin";
		$result = mysqli_query($conn, $sql);
		// عرض البيانات في جدول HTML

    if (mysqli_num_rows($result) > 0) {
		
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["admin_name"]."</td>
                <td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "لا يوجد اسئلة  متاحة في الجدول";
		}
		mysqli_close($conn);
	?>





<div class="button" id="add">إضافة متحكم</div>
    <form action="add_admin.php" method="post">
        <input type="text" name="name" placeholder=" الاسم الرباعي" class="question">
        <input type="text" name="admin_name" placeholder="اسم المتحكم" class="answer">
        <input type="email" name="email" placeholder="البريد الاكتروني" class="answer">
        <input type="pasword" name="password" placeholder="كلمة السر " class="answer">
       <div class="choose">
       <input type="submit" id="go">
      <input type="reset" value="الغاء" id="exit"> 
      <br>

      </div>
       
    </form>
    <div class="button" id="delete">حذف متحكم </div>
    <form action="delete_admin.php" method="post">
        <input type="number" name="id" placeholder="ادخل رقم المتحكم لحذفه" class="answer">
       <input type="submit"  id="go">
      <input  type="reset" value="الغاء" id="exit"> 

     </form>
     <a href="../../admin.php">  <input type="reset" value="back" id="back"> </a>


<script src="../../../../js/option.js"></script>


</body>
</html>