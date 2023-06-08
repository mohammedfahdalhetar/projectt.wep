<!DOCTYPE html>
<html>
<head>
	<title>عرض بيانات الجدول</title>
	<style>
	table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1em;
  background-color: #f2f2f2;
}

th {
  background-color: #0074D9;
  color: white;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

tr:nth-child(even) {
  background-color: #e6e6e6;
}
.button{
  width: 80px;
    height: 25px;
    background-color: rgb(194, 189, 179);
    display: inline-block;
    margin: 0 25px;
    position: relative;
    left: 27%;
    font-size: 20px;
    padding: 2px 30px;
    border-radius: 5px;

}
form{
  display: none;
  margin:20px 0;
}
.choose{
  display: inline-block;
  margin: 0 25px;
    position: relative;
    left: -45%;
    bottom: -50px;
    margin:0 0 40px;
}
#go{
  width: 80px;
    height: 25px;
    background-color: rgb(194, 189, 179);
    font-size: 20px;
    padding: 2px 30px;
    border-radius: 5px;
    border:solid 2px blue;


}
#exit{
  width: 80px;
    height: 25px;
    background-color: rgb(194, 189, 179);
    font-size: 20px;
    padding: 2px 30px;
    border-radius: 5px;
    border:solid 2px red;

}
.id{
width:30px;
  height: 40px;

}
.question{
  width: 430px;
  height:40px;
}
.answer{
  width:120px;
  height: 40px;
}
	</style>
</head>
<body>
	<?php
		// تأسيس اتصال بقاعدة البيانات
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "melion";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// التأكد من نجاح الاتصال
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// استعراض جميع البيانات من الجدول
		$sql = "SELECT * FROM questions";
		$result = mysqli_query($conn, $sql);

		// عرض البيانات في جدول HTML
		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>السؤال</th><th>الاجابة الأولى</th><th>الاجابة الثانية</th><th>الاجابة الثالثة</th>
            <th> الاجابة الرابعة</th><th>الاجابة الصحيحة </th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["question"]."</td><td>".$row["answer1"]."</td>
                <td>".$row["answer2"]."</td><td>".$row["answer3"]."</td>
                <td>".$row["answer4"]."</td><td>".$row["check_answer"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "لا يوجد اسئلة  متاحة في الجدول";
		}

    
		mysqli_close($conn);
	?>
    <div class="button" id="add">إضافة سؤال</div>
    <form action="addq.php" method="post">
        <input type="text" name="quetion" placeholder="ادخل السؤال" class="question">
        <input type="text" name="answer1" placeholder="الاجابة الاولى" class="answer">
        <input type="text" name="answer2" placeholder="الاجابة الثانية" class="answer">
        <input type="text" name="answer3" placeholder="الاجابة الثالثة" class="answer">
        <input type="text" name="answer4" placeholder="الاجابة الرابعة" class="answer">
        <input type="text" name="check_answer" placeholder="الاجابة الصحيحة" class="answer">
       
       <div class="choose">
       <input type="submit" id="go">
      <input type="reset" value="الغاء" id="exit"> 
      </div>
       
    </form>