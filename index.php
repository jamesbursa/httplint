<?php
header('Last-Modified: ' .
		date('D, d M Y H:i:s', filemtime('index.php')) . ' GMT');

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>HTTP Header Lint</title>
<link rel="stylesheet" type="text/css" href="httplint.css">
</head>

<body>
<h1><img src="httplint.png" alt=""> HTTP Header Lint</h1>

<?php
if (isset($url)) {
	$u = htmlspecialchars($url);
	echo "<h2>Results for <a href=\"$u\">$u</a></h2>";
	passthru('/home/james/Projects/httplint/httplint --html ' .
			escapeshellarg($url));
} else {
	$u = 'http://';
	?>
<p>Httplint performs various checks on HTTP/1.1
headers returned by a server.</p>

<p>It checks the syntax and content of almost all
HTTP/1.1 response headers, and also warns about
missing headers and suggests improvements.</p>

<?php
}
?>

<form action="/" method="get">
<p>Enter a HTTP URL to check:</p>
<p><input type="text" name="url" value="<?= $u ?>">
<input type="submit" value="Check URL"></p>
</form>

<p>The <a href="http://www.strcprstskrzkrk.co.uk/httplint">Httplint
source</a> is available. Created by
<a href="mailto:james.bursa@strcprstskrzkrk.co.uk">James Bursa</a>.

<p>Thanks to <a href="http://www.smoothartist.com/">Michael Drake</a>
for the icon.</p>

</body>
</html>
