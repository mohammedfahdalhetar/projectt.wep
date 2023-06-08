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
      <tr><th>ID</th><th>الاسم</th><th> اسم المستخدم</th><th>البريد الإلكتروني</th><th>كلمة لسر</th></tr>
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
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);
		// عرض البيانات في جدول HTML

		if (mysqli_num_rows($result) > 0) {
		
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "لا يوجد بيانات متاحة في الجدول";
		}

		mysqli_close($conn);
	?>





<div class="button" id="add">إضافة مستخدم</div>
    <form action="add_user.php" method="post">
        <input type="text" name="name" placeholder=" الاسم الرباعي" class="question">
        <input type="text" name="username" placeholder="اسم المستحدم" class="answer">
        <input type="email" name="email" placeholder="البريد الاكتروني" class="answer">
        <input type="pasword" name="password" placeholder="كلمة السر " class="answer">
       
       <div class="choose">
       <input type="submit" id="go">
      <input type="reset" value="الغاء" id="exit"> 
	  
      </div>
       
    </form>
    <div class="button" id="delete">حذف مستخدم </div>
    <form action="delete_user.php" method="post">
        <input type="number" name="id" placeholder="ادخل رقم المستخدم لحذفه" class="answer">
       <input type="submit" id="go">
      <input type="reset" value="clouse" id="exit"> 

     </form>
     <a href="../../admin.php">  <input type="reset" value="back" id="back"> </a>

<script src="../../../../js/option.js"></script>

     <script src=""></script>
</body>
</html>