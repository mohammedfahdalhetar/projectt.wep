
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الدخول  المطور</title>
    <link rel="stylesheet" href="../../css/creat_account.css">     
    <link rel="stylesheet" href="../../css/pootstrap.css">     
</head>
<body>
<?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php }
     ?>
    
    <form action="check_admin_login.php" method="post">
        <div class="all">
            <img src="../../img/b3.jpeg" alt="">
                <input type="text" name="admin_name" placeholder="اسم المتحكم">
     <br>
                <input type="password" name="password" placeholder="كلمة السر">
    <br>
        
            <input type="submit" value="تسجيل الدخول">
    </form>

</body>
</html>