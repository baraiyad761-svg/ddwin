<?php session_start(); if(!isset($_SESSION['user'])){header('Location: login.php'); exit();} ?>
<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Slots Lobby</title>
<style>
body{background:#0a0a0a;color:#fff;font-family:Arial;margin:0;padding:10px}
h2{text-align:center}
.grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;padding:10px}
.card{background:#1e1e1e;border-radius:15px;padding:10px;text-align:center;border:1px solid #333}
.card img{width:100%;border-radius:10px;height:80px;object-fit:cover}
.card p{margin:8px 0 5px;font-size:13px;font-weight:bold}
.card button{background:gold;border:none;padding:6px 15px;border-radius:20px;font-weight:bold;font-size:12px}
.top{display:flex;justify-content:space-between;align-items:center;padding:10px}
</style>
</head><body>
<div class="top">
<a href="index.php" style="color:#fff;text-decoration:none">← Back</a>
<b>Balance: ₹<span id="bal"></span></b>
</div>
<h2>🎰 SLOT GAMES LOBBY 🎰</h2>
<div class="grid">

<?php
$games = ["Aviator","Mines","Crash","Plinko","Dice","Wheel","7 Up Down","Andar Bahar","Dragon Tiger","Roulette","Slots Pro","Fruit King","Mega Win","Lucky 9","Joker","Super Ace","Money Coming","Fortune Gems","Bomb","Sweet Bonanza"];
foreach($games as $g){
  echo '<div class="card">
  <img src="https://picsum.photos/200/100?random='.rand(1,100).'">
  <p>'.$g.'</p>
  <a href="slot_play.php?game='.$g.'"><button>PLAY</button></a>
  </div>';
}
?>

</div>
<script>
let bal=localStorage.getItem("ddwin_bal")||1000;
document.getElementById("bal").innerText=bal;
</script>
</body></html>
