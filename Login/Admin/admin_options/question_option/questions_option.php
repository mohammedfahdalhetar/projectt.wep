
<!DOCTYPE html>
<html>
<head>
	<title>جدول المستخدمين</title>
	<link rel="stylesheet" href="../../../../css/bootstrap.css">
	<link rel="stylesheet" href="../../../../css/option.css">

</head>
<body>
	<div class="container">
		<h2>جدول المستخدمين</h2>
		<table class="table table-striped blue-white">
			<thead>
      <tr><th>ID</th><th>السؤال</th><th>الاجابة الأولى</th><th>الاجابة الثانية</th><th>الاجابة الثالثة</th>
            <th> الاجابة الرابعة</th><th>الاجابة الصحيحة </th></tr>
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
		$sql = "SELECT * FROM questions";
		$result = mysqli_query($conn, $sql);

		// عرض البيانات في جدول HTML
		if (mysqli_num_rows($result) > 0) {
		
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["question"]."</td><td>".$row["answer1"]."</td>
                <td>".$row["answer2"]."</td><td>".$row["answer3"]."</td>
                <td>".$row["answer4"]."</td><td>".$row["check_answer"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "لا يوجد اسئلة  متاحة في الجدول";
		}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>
			</tbody>
		</table>
	</div>



<div class="button" id="add"> Add</div>
    <form action="addq.php" method="post">
        <input type="text" name="quetion" placeholder="ادخل السؤال" class="question">
        <input type="text" name="answer1" placeholder="الاجابة الاولى" class="answer">
        <input type="text" name="answer2" placeholder="الاجابة الثانية" class="answer">
        <input type="text" name="answer3" placeholder="الاجابة الثالثة" class="answer">
        <input type="text" name="answer4" placeholder="الاجابة الرابعة" class="answer">
        <input type="text" name="check_answer" placeholder="الاجابة الصحيحة" class="answer">
       
       <div class="choose">
       <input type="submit" id="go">
      <input type="reset" value="Clouse" id="exit"> 
      
      <a href="../../admin.php"><div class="exit">HOME  </div></a>
    </div>
  </form>
    <div class="button" id="update">Edite</div>
    <form action="update.php" method="post">
        <input type="number" name="id" placeholder="ادخل رقم السؤال لتعديله" class="id">
        <input type="text" name="quetion" placeholder="ادخل السؤال" class="question">
        <input type="text" name="answer1" placeholder="الاجابة الاولى" class="answer">
        <input type="text" name="answer2" placeholder="الاجابة الثانية" class="answer">
        <input type="text" name="answer3" placeholder="الاجابة الثالثة" class="answer">
        <input type="text" name="answer4" placeholder="الاجابة الرابعة" class="answer">
        <input type="text" name="check_answer" placeholder="الاجابة الصحيحة" class="answer">
        <div class="choose">
        <input type="submit" id="go">
       <input type="reset" value="الغاء" id="exit"> 
    <a href="../../admin.php"><div ID="exit">HOME  </div></a>

       </div>
    </form>

    <div class="button" id="delete">Remove  </div>
    <form action="delete.php" method="post">
        <input type="number" name="id" placeholder="ادخل رقم السؤال لحذفه" class="answer">
       <input type="submit" id="go">
      <input type="reset" value="clouse" id="exit"> 
    <a href="../../admin.php"><div id="exit">HOME  </div></a>

     </form>
     
     <a href="../../admin.php">  <input type="reset" value="back" id="back"> </a>





<script src="../../../../js/option.js"></script>
  
</body>
</html>