


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
$username = $_POST['admin_name'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// إنشاء الاستعلام لإدخال البيانات
$sql = "INSERT INTO admin (admin_name, name, email, password) VALUES ('$admin_name', '$name', '$email', '$password')";

// تنفيذ الاستعلام
if(mysqli_query($conn, $sql)) {
    echo "تم إضافة المستخدم بنجاح";
    header('Location: admin_option.php');
} else {
    echo "حدث خطأ أثناء إضافة المستخدم: " . mysqli_error($conn);
}

    
		mysqli_close($conn);
	?>