<?php 
session_start(); 
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit(); }
if(!isset($_SESSION['balance'])) $_SESSION['balance']=1000; 
$balance=$_SESSION['balance'];
$user=$_SESSION['user'];
?>
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
<h1>DDWIN</h1>
<p>User: <?php echo $user; ?> | <a href="logout.php" style="color:#ff4d4d">Logout</a></p>
<div class="box">
<h2 id="timer">30</h2>
<h3 id="result">Select Color</h3>
<button class="green" onclick="play('green')">GREEN</button>
<button class="red" onclick="play('red')">RED</button>
<button class="violet" onclick="play('violet')">VIOLET</button>
<p>Balance: ₹ <span id="bal"><?php echo $balance; ?></span></p>
<button class="withdraw" onclick="withdraw()">WITHDRAWAL</button>
</div>

<script>
let bal = <?php echo $balance; ?>;

function updateWallet(amount){
 fetch('wallet.php',{method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body:'amount='+amount})
 .then(r=>r.text()).then(b=>{ document.getElementById('bal').innerText=b; bal=parseInt(b); });
}

function play(c){
 if(bal < 100){ alert("Balance ઓછું છે!"); return; }
 let colors=['green','red','violet'];
 let win=colors[Math.floor(Math.random()*3)];
 document.getElementById('result').innerText="Result: "+win.toUpperCase();
 if(c==win){
   alert("WIN! +90");
   updateWallet(90);
 }else{
   alert("LOSE! -100");
   updateWallet(-100);
 }
}

function withdraw(){
 let upi = prompt("તારો UPI ID નાખો:");
 if(upi){ alert("Withdrawal Request: "+bal+" Rs to "+upi+" | Admin 24h માં મોકલશે"); }
}

let t=30;
setInterval(()=>{t--; if(t<0)t=30; document.getElementById('timer').innerText=t;},1000);
</script>
</body>
</html>
