<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DDWIN - Login</title>
<style>
body{margin:0;background:#f5f5f5;font-family:Arial}
.top{height:200px;background:linear-gradient(#ff4d4d,#ff8a8a);border-radius:0 0 30px 30px;text-align:center;padding-top:30px;color:#fff}
.box{background:#fff;margin:-60px 15px 0;padding:20px;border-radius:15px;box-shadow:0 4px 10px #ccc}
.tab{display:flex;background:#eee;border-radius:20px;padding:3px;margin-bottom:15px}
.tab div{flex:1;text-align:center;padding:8px;border-radius:20px;font-weight:bold}
.active-tab{background:#ff4d4d;color:#fff}
input{width:100%;padding:12px;margin:8px 0;border-radius:10px;border:1px solid #ddd;box-sizing:border-box}
.btn{width:100%;padding:12px;background:#ff4d4d;border:none;color:#fff;border-radius:25px;font-size:16px;font-weight:bold;margin-top:10px}
</style>
</head>
<body>
<div class="top"><h2>DDWIN</h2><p>Welcome to 91Club Style Game</p></div>
<div class="box">
<div class="tab"><div class="active-tab">Login</div><div>Register</div></div>
<form action="home.php" method="GET">
<input type="text" placeholder="Phone Number" required>
<input type="password" placeholder="Password" required>
<button class="btn">LOGIN</button>
</form>
<p style="text-align:center;font-size:13px;color:#888;margin-top:15px">Demo Login - No Password Needed, Just Click Login</p>
</div>
</body>
</html>￼Enter
