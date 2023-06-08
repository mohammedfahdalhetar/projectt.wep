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
  width: 120px;
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
  margin:20px 132px;
}
.choose{
  display: inline-block;
  margin: 0 25px;
    position: relative;
    left: -30%;
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
button{
    position: absolute;
    left: 45%;
    width: 100px;
    height:30px;
    background-color: rgb(194, 189, 179);
    border-radius: 5px;

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
		$sql = "SELECT * FROM Money";
		$result = mysqli_query($conn, $sql);

		// عرض البيانات في جدول HTML
		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>المبلغ الحالي </th><th>المبلغ  المسحوب</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row["CurrentMoney"]."</td><td>".$row["RemainingMoney"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "لا يوجد بيانات متاحة في الجدول";
		}

		mysqli_close($conn);
	?>





<div class="button" id="add">تعديل المبلغ الحالي </div>
    <form action="update_money.php" method="post">
        <input type="text" name="money" placeholder=" ادخل المبلغ لتحديث المبلغ الحالي" class="question">
      
       <div class="choose">
       <input type="submit" id="go">
       <input type="reset" value="الغاء" id="exit"> 
       </div>
       
    </form>
    <button onclick="goBack()">عودة</button>



</body>

<script>
const buttons = document.getElementsByClassName("button");
for (let button of buttons) {
  button.addEventListener("click", function() {
    for (let btn of buttons) {
      btn.style.display = "none"; 
    }
    
    button.nextElementSibling.style.display = "block";
  });
}

const forms = document.getElementsByTagName("form");
const exits = document.querySelectorAll("#exit");

    for (let exit of exits) {
      exit.addEventListener("click", function() {
        for (let form of forms) {
          form.style.display = "none";
        }
        for (let button of buttons) {    
          button.style.display = "inline-block";
        }
      })
    } 
    function goBack() {
      window.location.replace('http://localhost:7882/server/question/Login/Admin/admin.php');
}
</script>

</html>