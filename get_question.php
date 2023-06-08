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

// استعلام SQL لاسترداد السؤال الجديد
$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";

// تنفيذ الاستعلام وتخزين النتائج في متغير
$result = $conn->query($sql);

// التحقق من وجود نتائج
if ($result->num_rows > 0) {
    // حلقة لعرض كل سجل في النتائج
    while($row = $result->fetch_assoc()) {
        // تخزين البيانات في متغيرات
        $question = $row["question"];
        $answer1 = $row["answer1"];
        $answer2 = $row["answer2"];
        $answer3 = $row["answer3"];
        $answer4 = $row["answer4"];
        $check_answer = $row["check_answer"];

        // إرجاع السؤال الجديد كنص JSON
        $response = array(
            "question" => $question,
            "answer1" => $answer1,
            "answer2" => $answer2,
            "answer3" => $answer3,
            "answer4" => $answer4,
            "check_answer" => $check_answer
        );
        echo json_encode($response);
    }
} else {
    echo "0 نتائج";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>