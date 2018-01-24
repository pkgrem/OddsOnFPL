<html>
<body>
Your name is: <?php echo $_POST['teamid']; ?><br />

<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/my-team/<?php echo $_POST['teamid']; ?>"); // requires auth
$array = json_decode(json_encode($json), True);

print_r($array);
?>

</body>
</html>
