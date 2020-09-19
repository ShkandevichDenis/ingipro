<?php
function getIp() {
    $keys = [
       'X-Real-IP',
       'HTTP_X_FORWARDED_FOR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }
  
  $ip = getIp();
  echo 'ip = ' . $ip;  

phpinfo();

?>