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
$id = $_POST['id'];
$question = $_POST['quetion'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3']; 
$answer4 = $_POST['answer4'];
$check_answer = $_POST['check_answer'];

$Sql =" UPDATE questions SET id='$id',question='$question',answer1='$answer1',
answer2='$answer2',answer3='$answer3',answer4='$answer4',check_answer='$check_answer'
 WHERE id = $id ";

if(mysqli_query($conn, $Sql)) {
   // echo "تم تحديث السؤال بنجاح";
   header('Location: questions_option.php');
} else {
    echo "حدث خطأ أثناء تحديث السؤال: " . mysqli_error($conn);
}

    mysqli_close($conn);
?>