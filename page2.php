<?php
  if (isset($_COOKIE['username'])) {
    echo 'User '. $_COOKIE['username'] . ' is set<br>';
  }else {
    echo 'user is not set';
  }

 ?>
