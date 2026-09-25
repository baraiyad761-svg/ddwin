<?php session_start(); if(!isset($_SESSION['user'])){header('Location: login.php'); exit();} ?>
<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>DDWIN Slots</title>
<style>body{background:#111;color:#fff;font-family:Arial;text-align:center} .slot{font-size:50px;margin:20px;background:#222;padding:20px;border-radius:15px} button{padding:15px 30px;border:none;border-radius:10px;background:gold;font-weight:bold;font-size:18px}</style>
</head><body>
<h2>🎰 DDWIN SLOTS 🎰</h2>
<p>Balance: ₹<span id="bal"></span></p>
<div class="slot" id="slot">🍒 | 🍋 | 🔔</div>
<input type="number" id="bet" value="100" style="padding:10px;border-radius:8px;width:120px">
<br><br>
<button onclick="spin()">SPIN (Win 5x)</button>
<br><br>
<a href="index.php"><button style="background:#444;color:#fff">BACK TO COLOUR GAME</button></a>

<script>
let bal=parseInt(localStorage.getItem('ddwin_bal')||1000);
document.getElementById('bal').innerText=bal;
let icons=["🍒","🍋","🔔","🍉","⭐","7️⃣"];
function spin(){
 let bet=parseInt(document.getElementById('bet').value);
 if(bet>bal){alert("Balance ઓછું છે");return;}
 let a=icons[Math.floor(Math.random()*icons.length)];
 let b=icons[Math.floor(Math.random()*icons.length)];
 let c=icons[Math.floor(Math.random()*icons.length)];
 document.getElementById('slot').innerText=a+" | "+b+" | "+c;
 if(a==b && b==c){
   let win=bet*5;
   bal+=win;
   alert("JACKPOT! You Won ₹"+win);
 }else if(a==b || b==c || a==c){
   let win=bet*1;
   bal+=win;
   alert("Small Win! ₹"+win);
 }else{
   bal-=bet;
   alert("Try Again!");
 }
 localStorage.setItem('ddwin_bal',bal);
 document.getElementById('bal').innerText=bal;
}
</script>
</body></html>￼Enter
