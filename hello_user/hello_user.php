


<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{ background-image: url('../img/belion.jpg');
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
    text-align: center;
    color: white;
    font-size: 15px;r: black;


}
.container{
    position: absolute;
    height: 130px;

    /* background-color: blue; */
    display: inline;
    margin:center;
    direction: rtl;
    top: 105px;
}

.option1,.option2,.option3,.option4{
    width: auto;
    background-color: rgb(14, 96, 250,50%);
    color:white;
    margin: 20px;
    display: block;
    padding: 5px;

}
.option1,.option2,.option3,.option4{

    height: auto;

}
.start{
    width: 74px;
    height: 30px;
    background-color: #f4f9f9;
    color: red;
    margin: 0 79px;
}

.scroll{
    background-color: blue;
    font-size: large;
    color:aliceblue;
    
    display: none;
}
.more{
    margin: 0 94px;
    color: blue;
    font-size: larger;
    text-decoration: underline;
    cursor: pointer;
}
.welcome{
    width: 97%;
    height: 92px;
    background-color: rgb(14, 96, 250,50%);
    color: white;
    display: flex;
    position: absolute;
    margin: 5px;
}

.welcome .head{
    margin: 2px 46px;
    direction: rtl;
    font-size: x-large;
    font-family: auto;
    
    }
    img{
        width: 200px;
    height: 90px;
    }
    #name,#hala{
        width:400px;
    }
    #name{
        direction:ltr;
    }
</style>

</head>
<body>
    

<div class="welcome">
    <div class="head" id="name"></div>
   <div class="head"><img src="m.png" alt=""></div>
   <div class="head" id="hala"> أهلاّ بك</div>
</div>

<div class="container">
<div class="option option1">
    <h1>تشغيل اللعبة </h1>
    <div class="more">المزيد</div>
    <div class="scroll">

                        
                        <p>يجب ان تكون قد قرات قوانين اللعبة قبل البدء في تشغيل اللعبة </p>
                        <p>يمكنك الاطلاع على قوانين اللعبة من خيار قوانين اللعبة</p>
                        <div class="start">
                        <p id="go"> انطلق</p>
                        </div>
                </div>
</div>

    <div class="option option2">
        <h1>انجازاتك</h1>
       <div class="more">المزيد</div>

                <div class="scroll">
                    <p>لم يتم تفعيل ذلك بعد</p>
                </div>
    </div>
    <div class="option option3">
        <h1>قوانين اللعبة</h1>
        <div class="more">المزيد</div>

                <div class="scroll">
                        
                        <h4>مرحبا بك عزيزي من الجيد الاطلاع على قوانين اللعبة قبل البدء باللعب</h4>
                        <p>إليك اهم قوانين اللعبة</p>
                        <p>1-يمكنك اختيار اجابة واحدة فقط من اصل اربع اجابات</p>
                        <p>2-عند اختيار الاجابة لايمكنك التراجع عن ذلك </p>
                        <p>3-يمكنك اختيار المساعدة لمرة واحدة فقط في المسابقة  </p>
                        <p>4- يجب ان يكون لديك بطاقة شخصية او جواز سفر لاستلام المبلغ لذي ربحته من المسابقة</p>
                        <p>5- نوع عملة المبلغ بالدولار الامريكي</p>
                </div>
    </div>

    <div class="option option4">
        
        <h1>من نحن</h1>
        <div class="more">المزيد</div>

                <div class="scroll">
                  <h3>طلاب قسم تقنية معلومات مستوى ثالث</h3>
                  <p>  المهندس: ايمن احمد حازم</p>
                  <p>المهندس: اسامة محمد محمد </p>
                  <p>المهندس: محمد عبدالله قاسم</p>
                  <p>المهندس: محمد فهد الهتار</p>
                </div>
    </div>

</div>



</body>
<script>



  var Name = "<?php echo $_SESSION['name']; ?>";
  document.getElementById("name").innerHTML = Name;

 const moreButtons = document.querySelectorAll('.more');
moreButtons.forEach(button => {
    button.addEventListener('click', () => {
        const scroll = button.nextElementSibling;
        if (scroll.style.display === 'block') {
            scroll.style.display = 'none';
        } else {
            scroll.style.display = 'block';
        }
    }); 
});

var go=document.getElementById("go");
go.addEventListener('click',function(){
  location.href='../Game/index.php';

});


</script>
</html>