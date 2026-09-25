<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slots</title>
<style>
body{margin:0;background:#f5f5f5;font-family:Arial}
.header{background:#ff4d4d;color:#fff;padding:15px;display:flex;align-items:center}
.header a{color:#fff;text-decoration:none;font-size:20px;margin-right:15px}
.grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;padding:10px}
.game{background:#fff;border-radius:12px;padding:10px;text-align:center;box-shadow:0 2px 5px #ccc}
.game img{width:100%;border-radius:10px;height:80px;object-fit:cover;background:#eee}
.game b{font-size:12px;display:block;margin-top:5px}
.bottom{position:fixed;bottom:0;width:100%;background:#fff;display:flex;justify-content:space-around;padding:10px 0;border-top:1px solid #ddd}
.bottom a{text-decoration:none;color:#888;font-size:12px;text-align:center}
.bottom a.active{color:#ff4d4d}
</style>
</head>
<body>
<div class="header"><a href="home.php">←</a> <b>SLOT GAMES</b></div>

<div class="grid">
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/FF0000/FFFFFF?text=COLOR"><b>Color Game</b></div>
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/00AA00/FFFFFF?text=GREEN"><b>Lucky Slot</b></div>
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/0000FF/FFFFFF?text=DIAMOND"><b>Diamond Slot</b></div>
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/FF8800/FFFFFF?text=777"><b>777 Slots</b></div>
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/AA00FF/FFFFFF?text=JOKER"><b>Joker Game</b></div>
<div class="game" onclick="location.href='index.php'"><img src="https://via.placeholder.com/150/00CCFF/FFFFFF?text=FRUIT"><b>Fruit Slot</b></div>
</div>

<div style="height:80px"></div>
<div class="bottom">
<a href="home.php">🏠<br>Home</a>
<a href="#" class="active">🎰<br>Slots</a>
<a href="#">📊<br>Activity</a>
<a href="#">👤<br>Account</a>
</div>

</body>
</html>￼Enter
