<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Deposit</title>
<style>body{background:#0f0f0f;color:#fff;font-family:Arial;text-align:center;padding:15px}.box{background:#1e1e1e;padding:20px;border-radius:15px;margin-top:20px}input{padding:12px;width:80%;border-radius:8px;border:none;margin:10px}button{padding:12px 25px;border:none;border-radius:10px;background:#2ecc71;color:#fff;font-weight:bold}</style></head>
<body>
<h2>RECHARGE WALLET</h2>
<div class="box" id="step1">
<p>Amount નાખો</p>
<input type="number" id="amt" placeholder="Ex: 500">
<br><button onclick="showQR()">NEXT</button>
</div>

<div class="box" id="step2" style="display:none">
<h3 id="showAmt"></h3>
<p>આ QR પર પેમેન્ટ કરો</p>
<img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=upi://pay?pa=9638616595@upi%26am=" id="qr" style="background:#fff;padding:10px;border-radius:10px">
<p>UPI: 9638616595@upi</p>
<button onclick="paid()">I Have Paid</button>
</div>

<script>
function showQR(){
 let a=document.getElementById('amt').value;
 if(a<100){alert("Minimum 100");return;}
 document.getElementById('step1').style.display='none';
 document.getElementById('step2').style.display='block';
 document.getElementById('showAmt').innerText="Pay ₹ "+a;
 let upi="upi://pay?pa=9638616595@upi&pn=DDWIN&am="+a+"&cu=INR";
 document.getElementById('qr').src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data="+encodeURIComponent(upi);
 localStorage.setItem('pay_amt',a);
}
function paid(){
 let a=parseInt(localStorage.getItem('pay_amt'));
 let bal=parseInt(localStorage.getItem('ddwin_bal')||1000);
 bal+=a;
 localStorage.setItem('ddwin_bal',bal);
 alert("Recharge Success! ₹"+a+" Added. Balance: "+bal);
 window.location.href="index.php";
}
</script>
</body>
</html>
