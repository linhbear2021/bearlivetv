<!DOCTYPE html>
<html>
<head>
	<title>IPTV Channels</title>
</head>
<body>

<ul>
<?php
$file = './list.m3u'; //IPTV-playlist
$searchfor = '#EXTINF:-1';//Pattern for searching

$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";

if(preg_match_all($pattern, $contents, $matches)){}
else{echo "No matches found";}

foreach($matches[0] as $m){
$channel = explode(",", $m);
echo "<li>" . $channel[1] . "</li>";
};

?>
</ul>
</body>
</html>