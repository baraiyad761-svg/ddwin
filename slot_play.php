<?php $game=$_GET['game']??'Slots'; ?>
<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>body{background:#111;color:#fff;text-align:center;font-family:Arial} .box{background:#222;margin:20px;padding:20px;border-radius:15px} button{padding:15px 30px;background:gold;border:none;border-radius:10px;font-weight:bold}</style>
</head><body>
<h2><?php echo $game; ?></h2>
<p>Balance: ₹<span id="bal"></span></p>
<div class="box" style="font-size:50px" id="res">🎲 🎲 🎲</div>
<input id="bet" type="number" value="100" style="padding:10px;border-radius:8px"><br><br>
<button onclick="spin()">SPIN & WIN 10X</button><br><br>
<a href="slots.php" style="color:#fff">← All Games</a>
<script>
let bal=parseInt(localStorage.getItem('ddwin_bal')||1000);
document.getElementById('bal').innerText=bal;
function spin(){
 let bet=parseInt(document.getElementById('bet').value);
 if(bet>bal){alert("Low Balance");return;}
 let n=Math.random();
 document.getElementById('res').innerText = n>0.7 ? "💎 💎 💎" : "🍒 🍋 🔔";
 if(n>0.7){bal+=bet*5;alert("BIG WIN ₹"+bet*5);}else if(n>0.4){bal+=bet*1;alert("Win ₹"+bet);}else{bal-=bet;alert("Loss");}
 localStorage.setItem('ddwin_bal',bal);
 document.getElementById('bal').innerText=bal;
}
</script>
</body></html>￼Enter
