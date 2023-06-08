<?php

// تعريف المتغيرات اللازمة للاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melion";

// إنشاء اتصال بقاعدة البيانات
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// البحث عن المستخدم المطابق لمدخلات النموذج
$admin_name = $_POST['admin_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE CONCAT(admin_name, password) = '$admin_name$password'";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) == 1) {
    // تم تحقق من صحة اسم المستخدم وكلمة المرور، يمكن تخزين بعض المعلومات في الـSession.
    session_start();
    $_SESSION['admin_name'] = $admin_name;
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $_SESSION['name'] = $name;
    // اعادة توجيه المستخدم الى صفحة اخرى.
    header('Location:admin.php');
    echo "اسم المستخدم أو كلمة المرور  صحيحة.";
    echo  $name;
    exit();
} else {
  echo "  اسم المستخدم أو كلمة المرور غير صحيحة.";

}


// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);

?>