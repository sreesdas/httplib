<?php

$cookie_name = "loginStatus";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "<code>Cookies : </code>";
	echo '<code>{ <br> &nbsp "' . $cookie_name .'" : "' . $_COOKIE[$cookie_name] . '"<br> }</code>';
}
?>
