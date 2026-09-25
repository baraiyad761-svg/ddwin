<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{margin:0;background:#f5f5f5;font-family:Arial}
.top{background:#ff4d4d;color:#fff;padding:15px;border-radius:0 0 20px 20px}
.wallet{background:#fff;margin:10px;padding:15px;border-radius:15px;display:flex;justify-content:space-between;box-shadow:0 2px 5px #ccc}
.btn{padding:8px 20px;border-radius:20px;border:none;color:#fff;font-weight:bold}
.dep{background:#ff4d4d}.with{background:#2ecc71}
.lobby{display:grid;grid-template-columns:1fr 1fr;gap:10px;padding:10px}
.card{background:#fff;border-radius:15px;padding:20px;text-align:center;box-shadow:0 2px 5px #ccc}
.card img{width:60px}
.bottom{position:fixed;bottom:0;width:100%;background:#fff;display:flex;justify-content:space-around;padding:10px 0;border-top:1px solid #ddd}
.bottom a{text-decoration:none;color:#888;font-size:12px;text-align:center}
.bottom a.active{color:#ff4d4d}
</style>
</head>
<body>

<div class="top"><h3>DDWIN</h3></div>

<div class="wallet">
<div><b>Wallet Balance</b><br>₹ <span id="bal">1000.00</span></div>
<div><button class="btn with" onclick="location.href='index.php'">Withdraw</button> <button class="btn dep">Deposit</button></div>
</div>

<div class="lobby">
<div class="card" onclick="location.href='index.php'"><p>🎮</p><b>Lobby</b></div>
<div class="card"><p>🐟</p><b>Fishing</b></div>
<div class="card" onclick="location.href='slot.php'"><p>🎰</p><b>Slots</b></div>
<div class="card"><p>🃏</p><b>Casino</b></div>
</div>

<div class="bottom">
<a href="home.php" class="active">🏠<br>Home</a>
<a href="#">📊<br>Activity</a>
<a href="#">🌀<br>Spin</a>
<a href="#">🎁<br>Promotion</a>
<a href="#">👤<br>Account</a>
</div>

</body>
</html>￼Enter
