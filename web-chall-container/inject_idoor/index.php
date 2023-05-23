

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>countDown</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:800&display=swap');

* {
  box-sizing: border-box;
}


body {
  font-family:Montserrat, sans-serif;
  display: flex;
  height: 100vh;
  margin: 0;
  align-items: center;
  background: hsl(260,52%,94%);
  justify-content:center;
  flex-direction:column;
  overflow-x:hidden;
  background:#ffffff;
}

h1 {
  padding: 0 0.8em;
  font-size: 4.6vw;
  color:#131419;
  text-transform: uppercase;
  letter-spacing: 10px;
  text-shadow: 5px 5px 10px rgba(255,255,255,0.05), 
    -5px -5px 15px rgba(0,0,0,.1);
 
  display:block;
  position:relative;
  text-align:center;
}

#countdown{
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  width:auto;
  margin:0 auto;
  flex-wrap:wrap;
}
#countdown span{
  display:block;
  font-size:28px;
  line-height:1.5;
}
.digits{
  display:block;
  font-size:42px;
    text-shadow:
    -5px -5px 10px rgba(255,255,255,0.05),
    5px 5px 15px rgba(0,0,0,.5);
  line-height:1;
  color: hsl(260,50%,95%);
  padding:40px 20px;
  background:#131419;
  border-radius:6px;
  margin-right:25px;
  min-width:200px;
    box-shadow: -5px -5px 10px rgba(255,255,255,0.05), 
    5px 5px 15px rgba(0,0,0,.5); 
}
.digits:last-child{
  margin-right:0;
}

.container{width:100%;max-width:95%;}

@media(max-width:999px){
  
  h1{font-size:45px;}
  .digits{
    padding:30px 15px;
    font-size:35px;
    min-width:170px;
  }
  
}
@media(max-width:767px){
  h1{font-size:35px;margin-bottom:25px;}
  .digits{font-size:34px; margin-right:20px;min-width:130px;}
  #countdown span{font-size:18px;}
 
}
@media(max-width:640px){
  
  .digits{font-size:30px;margin-right:15px;padding:15px;min-width:98px;}
  #countdown span{font-size:15px;}
}

@media(max-width:480px){
  h1{
    font-size:28px;
    padding: 0;
    letter-spacing: 5px;
    line-height:32px;
  }
  #countdown {flex-direction:column;}
  .digits{margin-right:0;margin-bottom:15px;font-size:28px;min-width:115px;}
  #countdown span{font-size:12px;}
}    
</style>    
</head>
<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="login.php">login</a>
        <a class="nav-item nav-link disabled" href="#">Home</a>
      </div>
    </div>
  </nav> -->


    <div class="container"> 
        <h1>CTF TIME COUNTDOWN</h1>
        
        <div id="countdown">
          <div class="days digits"></div>
          <div class="hours digits"></div>
          <div class="minutes digits"></div>
          <div class="seconds digits"></div>
        </div>
    </div> 
    <div class="timer_div" id="timer_div"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
<script>
var new_date = new Date("3 June 2023 17:30:00 UTC +8");
function countDownTimer(new_date) {

    var endTime = new_date;			
    endTime = (Date.parse(endTime) / 1000);
    var currentTime = new Date();
    currentTime = (Date.parse(currentTime) / 1000);

    var timer = endTime - currentTime;

    var dd = Math.floor(timer / 86400); 
    var hh = Math.floor((timer - (dd * 86400)) / 3600);
    var mm = Math.floor((timer - (dd * 86400) - (hh * 3600 )) / 60);
    var ss = Math.floor((timer - (dd * 86400) - (hh * 3600) - (mm * 60)));

    if (hh < "10") { hh = "0" + hh; }
    if (mm < "10") { mm = "0" + mm; }
    if (ss < "10") { ss = "0" + ss; }

    $(".days").html(dd + "<span>Days</span>");
    $(".hours").html(hh + "<span>Hours</span>");
    $(".minutes").html(mm + "<span>Minutes</span>");
    $(".seconds").html(ss + "<span>Seconds</span>");		

}

setInterval(function() { countDownTimer(new_date); }, 1000);    
console.log(setInterval(function() { countDownTimer(new_date); }, 1000));

</script>           
</body>
</html>