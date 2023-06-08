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


// Get form data
$money = $_POST['money'];


$Sql =" UPDATE Money SET CurrentMoney='$money'";

if(mysqli_query($conn, $Sql)) {
   header('Location: http://localhost:7882/server/question/Login/Admin/admin_options/money/money_option.php');
} else
 {
    echo "حدث خطأ أثناء تحديث المبلغ:";
}

    mysqli_close($conn);
?>