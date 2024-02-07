<?php
include("config.php");
include("functions.php");
include("uilang.php");
include("accesslog.php");

if(isset($_GET["id"])){
  $ID = mysqli_real_escape_string($connection, $_GET["id"]);
  $sql = "SELECT postid FROM $tableposts WHERE ativo=1 and id = '$ID'";
  $result = mysqli_query($connection, $sql);
  if($result){
    header("Location: https://sloja.com.br/shop/?post=".mysqli_fetch_assoc($result)["postid"]);
  } else {
    header("Location: https://sloja.com.br/shop/");
  }
}
?>
