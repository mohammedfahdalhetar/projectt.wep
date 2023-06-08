<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melion";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من صحة الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
 $data=4;

if(isset($_POST['myData'])) {
  $data = $_POST['myData'];
  
  // افعل شيئاً مع البيانات المستلمة
  $sql = "SELECT * FROM questions where id=$data";

  echo "تم حفظ البيانات";

}

// استعلام SQL لاسترداد البيانات من جدول football_quiz
$sql = "SELECT * FROM questions where id=$data";

// تنفيذ الاستعلام وتخزين النتائج في متغير
$result = $conn->query($sql);

// التحقق من وجود نتائج
if ($result->num_rows > 0) {
    // حلقة لعرض كل سجل في النتائج
      $row = $result->fetch_assoc();
        // تخزين البيانات في متغيرات
        $question = $row["question"];
        $answer1 = $row["answer1"];
        $answer2 = $row["answer2"];
        $answer3 = $row["answer3"];
        $answer4 = $row["answer4"];
        $check_answer = $row["check_answer"];

        // اتخاذ إجراء على البيانات المستردة كما يلزم
        // echo "Question: " . $question . "<br>";
        // echo "Answer 1: " . $answer1 . "<br>";
        // echo "Answer 2: " . $answer2 . "<br>";
        // echo "Answer 3: " . $answer3 . "<br>";
        // echo "Answer 4: " . $answer4 . "<br>";
        // echo "Correct Answer: " . $check_answer . "<br><br>";
    // }
} else {
    echo "0 نتائج";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>

