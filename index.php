<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/elements/");
$array = json_decode(json_encode($json), True);

print_r($array);
?>
