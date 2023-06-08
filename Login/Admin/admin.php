<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    display: flex;
    justify-content: center;
    background-image:url("../../img/belion.jpg");

}

div{
    background-color: rgb(14, 96, 250,50%);
    
color: white;
}
.up{
    width: 80%;
    height: 280px;
    margin: 8px;
    display: flex;
    direction: rtl;
   
    position: absolute;
top: 20px;

}
.up div{
margin: 5px;
cursor: pointer;
padding: 8px;

}

.up div:hover ,.down div:hover{
    background-color: rgb(14, 96, 250,100%);
color: white;
border-radius: 10px;
  transition-duration: 0.5s;
  border: 3px solid blue;

}

.down{
    width: 80%;
    height: 280px;
    margin: 8px;
    display: flex;
    direction: rtl;
    position: absolute;
bottom: 20px;

}

.down div{
    padding: 8px;
    margin: 5px;
    cursor: pointer;

   
}
.up div,.down div{
    width: 50%;
    margin: 5px;
    border: 3px solid black;
border-radius: 8px;
}
.left{

    width: 200px;
    height: 200px;
    position: absolute;
    left: 20px;
    bottom: 15%;
}
.right{
    width: 200px;
    height: 200px;
    position: absolute;
    right: 230px;
    bottom: 15%;
}

</style>

</head>
<body>
    <!-- <div class="container"> -->
<div class="up">
        <div id="question">
                <h1>  عرض الأسئلة</h1>
                <p>عرض الاسئلة بما فيها:</p>
                <p>عرض جميع اسئلة المسابقة</p>
                <p>اضافة سؤال جديد</p>
                <p>حذف سؤال </p>
            

                <img class="right" src="options_icons/q.png" alt="">
        </div>

        <div id="users">
            <h1> معلومات المستخدمين</h1>
            <p>عرض معلومات المستخدمين بما فيها :</p>
            <p>عرض حسابات المستخدمين</p>
            <p>اضافة مستخدم جديد</p>
            <p>حذف حساب مستخدم</p>
            <p>تقييد مؤقت للمستخدم</p>
              
            <img class="left" src="options_icons/users5.png" alt="">
        </div>
    </div>
<div class="down">

        <div id="admin">
            <h1>اضافة متحكم جديد</h1>
            <p>عرض جميع اعضاء التحكم بما في ذلك :</p>
            <p></p>
            <p>اضافة متحكم جديد</p>
            <p>حذف حساب متحكم</p>
    

            <img class="right" src="options_icons/admin.png" alt="">
        </div>
        <div id="money">
            <h2>معلومات الرصيد</h2>
            <p>عرض معلومات الرصيد بما فيها :</p>
            <p>اضافة رصيد </p>
            <p> عرض الرصيد المتبقي</p>
            <p>  عرض الرصيد التي فاز بها المتسابقين</p>

            <img class="left" src="options_icons/preview.png" alt="">
        </div>
    </div>
</body>

<script>

var show_questions=document.getElementById('question');
var show_users=document.getElementById('users');
var show_money=document.getElementById('money');
var admin=document.getElementById('admin');

show_questions.addEventListener('click',function(){
    location.href='admin_options/question_option/questions_option.php';

});
show_users.addEventListener('click',function(){
  location.href='admin_options/users_option/users_option.php';

});
show_money.addEventListener('click',function(){
    location.href='admin_options/money/money_option.php';

});
admin.addEventListener('click',function(){
//    location.href='http://localhost:server/question/Login/Admin/admin_options/add_admin/admin_option.php';
   location.href='admin_options/add_admin/admin_option.php';

});

</script>
















</html>