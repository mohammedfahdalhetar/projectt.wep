<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $question = $row["question"];
        $answer1 = $row["answer1"];
        $answer2 = $row["answer2"];
        $answer3 = $row["answer3"];
        $answer4 = $row["answer4"];
        $check_answer = $row["check_answer"];

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

$conn->close();


?>
