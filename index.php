<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DDWin</title>
<style>
body{background:#0f0f0f;color:#fff;font-family:Arial;text-align:center;padding:15px}
.box{background:#1e1e1e;padding:20px;border-radius:15px;margin-top:20px}
button{padding:14px 28px;margin:8px;border:none;border-radius:10px;font-size:16px;font-weight:bold;color:#fff}
.green{background:#2ecc71}.red{background:#e74c3c}.violet{background:#9b59b6}
.withdraw{background:#f39c12; width:90%; margin-top:15px;}
#timer{font-size:40px;color:#f1c40f}
</style>
</head>
<body>
<h1>DDWIN COLOR GAME</h1>
<div class="box">
<h2 id="timer">30</h2>
<h3 id="result">Select Color</h3>
<button class="green" onclick="play('green')">GREEN</button>
<button class="red" onclick="play('red')">RED</button>
<button class="violet" onclick="play('violet')">VIOLET</button>
<p>Balance: <span id="bal">1000</span> Rs</p>

<button class="withdraw" onclick="withdraw()">WITHDRAWAL</button>
</div>

<script>
let bal=1000;
function play(c){
 let colors=['green','red','violet'];
 let win=colors[Math.floor(Math.random()*3)];
 document.getElementById('result').innerText="Result: "+win.toUpperCase();
 if(c==win){bal+=90; alert("WIN! +90");}else{bal-=100; alert("LOSE! -100");}
 document.getElementById('bal').innerText=bal;
}
function withdraw(){
 let upi = prompt("તારો UPI ID નાખો:");
 if(upi){ alert("Withdrawal Request Sent: "+bal+" Rs to "+upi); }
}
let t=30;
setInterval(()=>{t--; if(t<0)t=30; document.getElementById('timer').innerText=t;},1000);
</script>
</body>
</html>￼Enter
