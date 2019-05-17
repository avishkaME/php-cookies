<?php
  setcookie('username', 'Avi', time() + 3600);

  if (isset($_COOKIE['username'])) {
    echo 'User '. $_COOKIE['username'] . ' is set<br>';
  }else {
    echo 'user is not set';
  }

 ?>
