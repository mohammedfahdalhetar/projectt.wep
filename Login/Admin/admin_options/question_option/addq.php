


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
      $question = $_POST['quetion'];
      $answer1 = $_POST['answer1'];
      $answer2 = $_POST['answer2'];
      $answer3 = $_POST['answer3']; 
      $answer4 = $_POST['answer4'];
      $check_answer = $_POST['check_answer'];
      
      // Prepare SQL query
      $Sql = "INSERT INTO questions (question, answer1, answer2, answer3, answer4, check_answer) 
              VALUES ( '$question',  '$answer1', '$answer2',  '$answer3', '$answer4',  '$check_answer')";
       
       if(mysqli_query($conn, $Sql)) {
      //  echo "تم إضافة المستخدم بنجاح";
        header('Location:questions_option.php');
    } else {
        echo "حدث خطأ أثناء إضافة المستخدم: " . mysqli_error($conn);
    }
    
		mysqli_close($conn);
	?>