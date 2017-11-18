<?php
// Send the headers
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo '<xml>
<person>
	<id>1</id>
	<name>Sherlock Holmes</name>
	<address>
		<house>221b</house>
		<street>Baker St</street>
	</address>
</person>
</xml>';

?>