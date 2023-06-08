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
 $id = $_POST['id'];
$Sql ="DELETE FROM users WHERE id = $id ";

if(mysqli_query($conn, $Sql)) {
   // echo "تم حذف السؤال بنجاح";
   header('Location:users_option.php');
} else {
    echo "حدث خطأ أثناء حذف السؤال: " . mysqli_error($conn);
}

    mysqli_close($conn);
?>