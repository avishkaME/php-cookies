<?php
  setcookie('username', 'Avi', time() + 3600);

  // Delete cookie
  //setcookie('username', 'Avi', time() - 3600);

  //count cookies
  if (count($_COOKIE) > 0) {
    echo 'There are '.count($_COOKIE). ' cookies saved<br>';
  }else {
    echo 'There are no cookies saved<br>';
  }

  if (isset($_COOKIE['username'])) {
    echo 'User '. $_COOKIE['username'] . ' is set<br>';
  }else {
    echo 'user is not set';
  }

 ?>
