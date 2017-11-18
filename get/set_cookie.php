<?php
$cookie_name = "loginStatus";
$cookie_value = "True";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo '<code>{ <br> &nbsp "' . $cookie_name .'" : "' . $cookie_value . '"<br> }</code>';

?>