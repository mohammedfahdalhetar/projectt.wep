
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/animate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>    
	<!-- <h1>من سيربح المليون</h1> -->
	<div class="help " id="h">
        <div  class="helping wow swing " >الجمهور</div> 
       <div  class="helping wow swing" id="half" >50:50</div>
        <div  class="helping wow swing" >صديق</div>
        <div class="helping wow swing" id="timer">30</div>
        <div  class="helping wow swing" >رصيدك </div>
    <a href="logout.php"><div class="helping wow swing" id="">logout</div></a>

    </div>        <div style="margin-left:60px;margin-top:20px; " class="helping"id="rsd" >
    
</div>

    <div class="question wow bouncinDown " id="question" > </div>
    <div class="ans" id="a">
        <div class="answer  wow bouncinDown " id="answer1"></div>
        <div class="answer  wow bouncinDown " id="answer2"></div>
        <div class="answer  wow bouncInRight " id="answer3"></div>
        <div class="answer  wow bouncInLift " id="answer4"></div>
    </div>
<div class="money" id="m">
    <div class="mo" id="mo">1,000,000</div>
    <div class="mo" id="mo">500,000</div>
    <div class="mo"id="mo">250,000</div>
    <div class="mo"id="mo">125,000</div>
    <div class="mo"id="mo">64,000</div>
    <div class="mo"id="mo">32,000</div>
    <div class="mo"id="mo">16,000</div>
    <div class="mo"id="mo">8,000</div>
    <div class="mo"id="mo">4,000</div>
    <div class="mo"id="mo">2,000</div>
    <div class="mo"id="mo">1,000</div>
    <div class="mo"id="mo">500</div>
    <div class="mo"id="mo">300</div>
    <div class="mo"id="mo">200</div>    
    <div class="mo " id="mo">100</div>


</div>
<!-- <?php
include 'melion.php';
?> -->
<!-- <?php
include 'get_question.php';
?> -->
<script>




var half=document.getElementById('half');
var ans1=document.getElementById('answer1');
var ans2=document.getElementById('answer2');
var ans3=document.getElementById('answer3');
var ans4=document.getElementById('answer4');
var r=document.getElementById('r');

// var question = "<?php echo $question; ?>";
// var answer1 = "<?php echo $answer1; ?>";
// var answer2 = "<?php echo $answer2; ?>";
// var answer3 = "<?php echo $answer3; ?>";
// var answer4 = "<?php echo $answer4; ?>";
// var check_answer = "<?php echo $check_answer; ?>";
var question;
var answer1;
var answer2;
var answer3;
var answer4;
var check_answer;

//تخزين الفلوس
var money=0;
money+=money;

 get_question();

document.getElementById("question").innerHTML = question;
document.getElementById("answer1").innerHTML = answer1;
document.getElementById("answer2").innerHTML = answer2;
document.getElementById("answer3").innerHTML = answer3;
document.getElementById("answer4").innerHTML = answer4;
// var ans1=document.getElementById("answer1")
// var ans2=document.getElementById("answer2")
// var ans3 =document.getElementById("answer3")
// var ans4=document.getElementById("answer4")
var check_answer = "<?php echo $check_answer; ?>";


// var half = document.getElementById('half');
half.addEventListener('click', handleClickOnce);

function handleClickOnce(event) {
  var arr = [answer1, answer2, answer3, answer4];
  console.log(arr);
  var count = 0;
  for (let i = 0; i < 4; i++) {
    console.log(check_answer);
    if (arr[i] !== check_answer) {
      document.getElementById('answer' + (i + 1)).innerHTML = ' DELETED';
      count++;
    }
    if (count == 2) {
      break;
    }
  }
  half.removeEventListener('click', handleClickOnce);
half.style.background="red";
}

// var remainingTime;

var remainingTime = 300;
var timer = document.getElementById('timer');
var countdown = setInterval(function() {
  remainingTime--;
  if (remainingTime == 10) {
timer.style.background="red";
  }
  timer.innerHTML = remainingTime;
  if (remainingTime == 0) {
    clearInterval(countdown);
    window.location.replace('finish.php');
   
    resetTimer();
  }
}, 1000);

function resetTimer() {
  remainingTime = 30;
  timer.innerHTML = remainingTime;
}




var rsd=document.getElementById("rsd");

var counter=0;
var j;
j=0;
var folos=[0,100,200,300,500,1000,2000,4000,8000,16000,32000,64000,125000,250000,500000,1000000];

var nFolos=0;
   nFolos+=folos[j];
var m=document.querySelectorAll(".mo");
var plus=15;
var min=16;


ans1.addEventListener("click", function() {
    // consol.log("counter");
        if (answer1 === check_answer) {
            ans1.style.background="green";

            setTimeout(function() {

            resetTimer();
            get_question();
            ans1.style.background="rgb(14, 96, 250,50%)";
           

  
}, 3000);
j++;

nFolos=folos[j];
rsd.innerHTML= nFolos;
min--;
plus--;
m[plus].style.background='yellow';
m[plus].style.color='rgb(14, 96, 250)';

m[min].style.background=' #133e57';


    //     this.style.color='green';
    //    r.style.color="red";
       
    }
    else {
        
        ans1.classList.add('swing');        
        this.style.background="red";
        document.getElementById("question").innerHTML = "خطأ !!! الاجابة الصحيحة هي " + check_answer;
        setTimeout(function() {
  window.location.replace('finish.php');
}, 3000);
    }

});





        ans2.addEventListener("click", function() {

    if (answer2 === check_answer) {
        ans2.style.background="green";

        setTimeout(function() {
            ans2.style.background="rgb(14, 96, 250,50%)";

        resetTimer();
        get_question();


}, 3000);  j++;

        nFolos=folos[j];
        rsd.innerHTML= nFolos;
        min--;

        plus--;
m[plus].style.background='yellow';
m[plus].style.color='rgb(14, 96, 250)';
m[min].style.background=' #133e57';

        // this.style.color='green';
        // r.style.color="red";
        



    } else { 
        ans2.classList.add('swing');        
        this.style.background="red";
        document.getElementById("question").innerHTML = "خطأ !!! الاجابة الصحيحة هي " + check_answer;
        setTimeout(function() {
            counter=m[plus].value;
  window.location.replace('finish.php');
}, 3000);
    }
      
});

ans3.addEventListener("click", function() {

if (answer3=== check_answer) {
    ans3.style.background="green";

    setTimeout(function() {
        ans3.style.background="rgb(14, 96, 250,50%)";


    resetTimer();
    get_question();



}, 3000); 
 j++;

    nFolos=folos[j];
    rsd.innerHTML= nFolos;
    min--;

    plus--;
m[plus].style.background='yellow';
m[plus].style.color='rgb(14, 96, 250)';
m[min].style.background=' #133e57';

    // this.style.color='green';
    // r.style.color="red";
    



} else { 
    ans3.classList.add('swing');        
    this.style.background="red";
    document.getElementById("question").innerHTML = "خطأ !!! الاجابة الصحيحة هي " + check_answer;
    setTimeout(function() {
window.location.replace('finish.php');
}, 3000);
}
  
});

ans4.addEventListener("click", function() {

if (answer4 === check_answer) {
    ans4.style.background="green";

    setTimeout(function() {
        ans4.style.background="rgb(14, 96, 250,50%)";

    resetTimer();
    get_question();


}, 

3000); 

j++;
    nFolos=folos[j];
    rsd.innerHTML=nFolos;

    plus--;
m[plus].style.background='yellow';
m[plus].style.color='rgb(14, 96, 250)';

m[min].style.background=' #133e57';

    // this.style.color='green';
    // r.style.color="red";
    



} else { 
    ans4.classList.add('swing');        
    this.style.background="red";
    document.getElementById("question").innerHTML = "خطأ !!! الاجابة الصحيحة هي " + check_answer;
    setTimeout(function() {
window.location.replace('finish.php');
}, 3000);
}
  
});



 function get_question(){



        var randomNumber = generateRandomNumber(1, 5);
        console.log(randomNumber);
      
        $.ajax(
            {
    url: "get_question.php",
    method: "POST",
    success: function(response) {
        var data = JSON.parse(response);
        document.getElementById("question").innerHTML = data.question;
        document.getElementById("answer1").innerHTML = data.answer1;
        document.getElementById("answer2").innerHTML = data.answer2;
        document.getElementById("answer3").innerHTML = data.answer3;
        document.getElementById("answer4").innerHTML = data.answer4;
        question=data.question;
        answer1=data.answer1;
        answer2=data.answer2;
        answer3=data.answer3;
        answer4=data.answer4;
    
        
        check_answer=data.check_answer;
        
        // ans1.style.color=' rgb(58, 176, 245)';
        // ans2.style.color='rgb(58, 176, 245)';
        // ans3.style.color='rgb(58, 176, 245)';
        // ans4.style.color='rgb(58, 176, 245)';
    },
    error: function() {
        alert("حدث خطأ أثناء استرداد السؤال الجديد. يرجى إعادة المحاولة.");
    }


});
 }

    
                        function generateRandomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
            }

</script>
<script src="../js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>
