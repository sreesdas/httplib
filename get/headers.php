<?php

echo "<code> { <br>";
foreach (getallheaders() as $name => $value) {
    echo  ' &nbsp "' . $name . '" : "' .$value. '" <br>';
}
echo "}</code>";

?>