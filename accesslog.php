<?php
  require_once("config.php");

  $USERAGENT=($_SERVER['HTTP_USER_AGENT']??'Agent NOT FOUND');
  $IP=($_SERVER['REMOTE_ADDR']??'No IP');
  $REFERER=($_SERVER['HTTP_REFERER']??'No REFERER');
  $URL=($_SERVER['REQUEST_URI']??'No URI');

  $LOG='S';
  foreach(IGNORE_IP as $IGNORAR) {
    if($IP==$IGNORAR) $LOG='N';
  }

  if($LOG=='S') {
    $SQL="INSERT INTO wappstore_accesslog (user_agent,ip,url,referer) VALUES ('$USERAGENT','$IP','$URL','$REFERER')";
    mysqli_query($connection, $SQL);
  }

?>
