<?php

if(isset($_POST['username']) && isset($_POST['password'])){
  $uname = $_POST['username'];
  $pword = $_POST['password'];

  echo $uname.' '.$pword;
}
