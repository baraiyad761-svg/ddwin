<?php
session_start();
if(!isset($_SESSION['balance'])) $_SESSION['balance']=1000;

if(isset($_POST['amount'])){
  $_SESSION['balance'] += (int)$_POST['amount'];
  echo $_SESSION['balance'];
  exit();
}
echo $_SESSION['balance'];
?>
